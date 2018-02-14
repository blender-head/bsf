<?php
	
	namespace App\Modules\Backend\App\Blog\Services;

	use Config;
    use File;

	use App\Models\Blog;

	class BlogServices
	{
		public function save(array $data): int
        {
            $model = new Blog();
            $id = $model->saveData($data);
            $filename = 'default.jpg';

            if($id && $data['featured_image'])
            {
            	$filename = upload($data['featured_image'], Config::get('upload_path.blog'));
            }

            $this->updateImage($id, $filename, Blog::class);
            return $id;
        }

        public function update(array $data): bool
        {
            $model = new Blog();
            $result = $model->editData($data);
            $filename = $data['old_featured_image'];

            if($result && $data['featured_image'])
            {
                $filename = upload($data['featured_image'], Config::get('upload_path.blog'));

                if($data['old_featured_image'] != 'default.jpg')
                {
                    File::delete(Config::get('upload_path.blog') . DIRECTORY_SEPARATOR . $data['old_featured_image']);
                }
            }
            
            $this->updateImage($data['id'], $filename, Blog::class);
            return $result;
        }
	}