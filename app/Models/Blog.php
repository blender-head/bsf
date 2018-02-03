<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use Cviebrock\EloquentSluggable\Sluggable;

    use App\Library\Bases\BaseModuleRoute;

    use DB;
    use View;

    class Blog extends Model
    {
        use Sluggable;

        protected $table = 'blogs';

        public function sluggable()
        {
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        }

        public function getAll(array $data)
        {
            $query = "SELECT `b`.`id`, `b`.`title`, `b`.`slug`, `b`.`created_at`, `u`.`name` AS `author`, IF(`b`.`status` =  1, 'Published', 'Unpublished') AS `status`
                FROM `blogs` AS `b` INNER JOIN `users` AS `u` ON `b`.`created_by` = `u`.`id` 
            ORDER BY `b`.`created_at` DESC 
            LIMIT :offset,:limit";

            $results = DB::select($query, ['limit' => $data['length'], 'offset' => $data['start']]);
            return $results;
        }

        public function getBySlug(string $slug)
        {
            $query = "SELECT `b`.`title`, `b`.`created_at`, `b`.`updated_at`, `u`.`name` 
                FROM `blogs` AS `b` INNER JOIN `users` AS `u` ON `b`.`created_by` = `u`.`id` 
            WHERE `b`.`slug` = :slug";

            $result = DB::select($query, ['slug' => $slug]);
            return $result;
        }

        public function prepare_index_data(array $db_data, string $row_number)
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