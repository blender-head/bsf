<?php 

    namespace App\Models;

    use App\Library\Bases\BaseModel;

    use Illuminate\Database\Eloquent\Model;

    use App\Library\Bases\BaseModuleRoute;

    use DB;
    use View;
    use Auth;
    
    class Blog extends BaseModel
    {
        public $table = 'blogs';

        public function __construct()
        {
            parent::__construct();
        }

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
            $query = "SELECT `b`.`id`, `b`.`title`, `b`.`slug`, `b`.`created_at`, `u`.`name` AS `author`, IF(`b`.`status` =  1, 'Published', 'Unpublished') AS `status`
                FROM `blogs` AS `b` INNER JOIN `users` AS `u` ON `b`.`created_by` = `u`.`id` 
            ORDER BY `b`.`created_at` DESC 
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
            $this->title = $data['title'];
            $this->slug = $this->createSlug(Blog::class, 'slug', $this->title);
            $this->content = $data['content'];
            $this->excerpt = $data['excerpt'] ? $data['excerpt'] : $this->helper->getExcerpt(strip_tags($data['content']), 0, 300);
            $this->image_normal = '';
            $this->image_thumbnail = '';
            $this->status = 1;
            $this->created_by = Auth::user()->id;
            $this->updated_by = Auth::user()->id;
            $this->save();

            return $this->id;
        }

        public function editData(array $data): bool {}
        public function setStatus(array $data): bool {}
        public function deleteData(array $data): bool {}

        /**
         *  Get blog by slug
         *  @param string $slug
         *  @return array
         */
        public function getBySlug(string $slug): array
        {
            $query = "SELECT `b`.`title`, `b`.`content`, `b`.`excerpt`, `b`.`image_normal`, `b`.`created_at`, `b`.`updated_at`, `u`.`name` 
                FROM `blogs` AS `b` INNER JOIN `users` AS `u` ON `b`.`created_by` = `u`.`id` 
            WHERE `b`.`slug` = :slug";

            $result = DB::select($query, ['slug' => $slug]);
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

            $edit_url = BaseModuleRoute::BE_PREFIX . '/blogs/edit';

            foreach ($db_data as $result) 
            {
                $input = [
                    View::make('partials.selector', ['id' => $result->id, 'content_type' => 'blog'])->render(),
                    $row_number,
                    $result->title,
                    $result->author,
                    View::make('partials.status', ['status' => $result->status])->render(),
                    date('d-m-Y H:i:s', strtotime($result->created_at)),
                    View::make('partials.default_action', ['data' => $result, 'edit_url' => $edit_url])->render()
                ];

                array_push($output, $input);
                $row_number++;
            }

            return $output;
        }
    }