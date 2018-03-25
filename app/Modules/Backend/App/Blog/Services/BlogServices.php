<?php
	
	namespace App\Modules\Backend\App\Blog\Services;

	use Config;

    use UploadManager;
	
    use App\Models\Blog;

	class BlogServices
	{
		public function save(array $data): int
        {
            $model = new Blog();
            $id = $model->saveData($data);

            if($id && $data['featured_image'])
            {
                $upload_result = $model->uploadImage($data['featured_image'], 'blog');
                $model->updateImage($id, $upload_result['filename'], $upload_result['filepath'], Blog::class);
            }
            
            return $id;
        }

        public function update(array $data): bool
        {
            $model = new Blog();
            $result = $model->editData($data);

            if($result && $data['featured_image'])
            {
                $upload_result = $model->uploadImage($data['featured_image'], 'blog');

                if($data['old_featured_image'] != Config::get('default_images.blog_' . env('UPLOAD_DRIVER')))
                {   
                    UploadManager::deleteFile($data['old_featured_image'], 'blog');
                }

                $model->updateImage($data['id'], $upload_result['filename'], $upload_result['filepath'], Blog::class);
            }
            
            return $result;
        }

        public function setStatus(array $data): bool
        {
            $model = new Blog();
            $model->setStatus($data);
            return true;
        }
	}