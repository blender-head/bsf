<?php 

    namespace App\Models;

    use App\Library\Bases\BaseModel;

    use Illuminate\Database\Eloquent\Model;

    use App\Library\Bases\BaseModuleRoute;

    use DB;
    use View;
    use Auth;
    use Config;
    
    class News extends BaseModel
    {
        public $table = 'news';

        /**
         *  Implmentation of Cviebrock\EloquentSluggable\Sluggable sluggable abstract method
         */
        public function sluggable(): array
        {
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        }

        /**
         *  Get paginated blog data
         *  @param array $data
         *  @return array
         */
        public function getAll(array $data): array
        {
            $query = "SELECT `n`.`id`, `n`.`uuid`, `n`.`title`, `n`.`slug`, `n`.`created_at`, `u`.`name` AS `author`, IF(`n`.`status` =  1, 'Published', 'Unpublished') AS `status`
                FROM `news` AS `n` INNER JOIN `users` AS `u` ON `n`.`created_by` = `u`.`id` 
            ORDER BY `n`.`created_at` DESC 
            LIMIT :offset,:limit";

            $results = DB::select($query, ['limit' => $data['length'], 'offset' => $data['start']]);
            return $results;
        }

        /**
         *  Save blog data
         *  @param array $data
         *  @return int
         */
        public function saveData(array $data): int
        {
            $upload_driver = env('UPLOAD_DRIVER');
            $path = Config::get('upload_path.news_' . $upload_driver);

            $this->uuid = $this->generateUUID();
            $this->title = $data['title'];
            $this->slug = $this->createSlug(Blog::class, 'slug', $this->title);
            $this->content = $data['content'];
            $this->excerpt = $data['excerpt'] ? $data['excerpt'] : create_excerpt(strip_tags($data['content']), 0, 300);
            $this->filename = Config::get('default_images.news_' . env('UPLOAD_DRIVER'));
            $this->filepath = Config::get('default_images.news_' . env('UPLOAD_DRIVER'));
            $this->status = 1;
            $this->created_by = Auth::user()->id;
            $this->updated_by = Auth::user()->id;
            $this->save();

            return $this->id;
        }

        public function editData(array $data): bool 
        {
            $model = News::find($data['id']);
            $model->slug = $model->title == $data['title'] ? $model->slug : $this->createSlug(Blog::class, 'slug', $data['title']);
            $model->title = $data['title'];
            $model->content = $data['content'];
            $model->excerpt = $data['excerpt'] ? $data['excerpt'] : create_excerpt(strip_tags($data['content']), 0, 300);
            $model->updated_by = Auth::user()->id;
            $model->save();

            return true;
        }

        public function setStatus(array $data): bool 
        {
            $prepared_data = [];

            $prepared_data[0] = $data['status'];
            
            $in_placeholders = $this->formatInPlaceholders($data['id']);
            
            foreach($data['id'] as $id)
            {
                array_push($prepared_data, $id);
            }

            DB::update("UPDATE `news` SET `status` = ? WHERE `uuid` IN (" . $in_placeholders . ")", $prepared_data);

            return true;
        }

        public function deleteData(array $data): bool 
        {
            $prepared_data = [];
            
            $in_placeholders = $this->formatInPlaceholders($data['id']);
            
            foreach($data['id'] as $id)
            {
                array_push($prepared_data, $id);
            }

            DB::update("DELETE FROM `news` WHERE `uuid` IN (" . $in_placeholders . ")", $prepared_data);

            return true;
        }

        /**
         *  Get blog by slug
         *  @param string $slug
         *  @return array
         */
        public function getBySlug(string $slug): array
        {
            $query = "SELECT `n`.`id`, `n`.`title`, `n`.`content`, `n`.`excerpt`, `n`.`filename`, `n`.`filepath`, `n`.`created_at`, `n`.`updated_at`, `u`.`name` 
                FROM `news` AS `n` INNER JOIN `users` AS `u` ON `n`.`created_by` = `u`.`id` 
            WHERE `n`.`slug` = :slug";

            $result = DB::select($query, ['slug' => $slug]);
            return $result;
        }

        /**
         *  Get blog image by UUID
         *  @param string $slug
         *  @return array
         */
        public function getImagesByUUID(array $data): array
        {
            $prepared_data = [];
            
            $in_placeholders = $this->formatInPlaceholders($data['id']);
            
            foreach($data['id'] as $id)
            {
                array_push($prepared_data, $id);
            }

            $result = DB::select("SELECT `filename`FROM `news` WHERE `uuid` IN (" . $in_placeholders . ")", $prepared_data);
            return $result;
        }

        /**
         *  Prepare blog index page data for jQuery datatable
         *  @param array $db_data
         *  @param string $row_number
         *  @return array
         */
        public function prepareIndexData(array $db_data, string $row_number): array
        {
            $output = [];

            $edit_url = BaseModuleRoute::BE_PREFIX . '/news/edit';

            foreach ($db_data as $result) 
            {
                $input = [
                    View::make('partials.selector', ['uuid' => $result->uuid, 'content_type' => 'news'])->render(),
                    $row_number,
                    $result->title,
                    $result->author,
                    View::make('partials.status', ['uuid' => $result->uuid, 'status' => $result->status])->render(),
                    date('d-m-Y H:i:s', strtotime($result->created_at)),
                    View::make('partials.default_action', ['data' => $result, 'edit_url' => $edit_url])->render(),
                    $result->uuid
                ];

                array_push($output, $input);
                $row_number++;
            }

            return $output;
        }
    }