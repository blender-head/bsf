<?php
	
	namespace App\Modules\Backend\App\News\Services;

	use Config;

    use UploadManager;
	
    use App\Models\News;

	class NewsServices
	{
		public function save(array $data): int
        {
            $model = new News();
            $id = $model->saveData($data);

            if($id && $data['featured_image'])
            {
                $upload_result = $model->uploadImage($data['featured_image'], 'news');
                $model->updateImage($id, $upload_result['filename'], $upload_result['filepath'], News::class);
            }
            
            return $id;
        }

        public function update(array $data): bool
        {
            $model = new News();
            $result = $model->editData($data);

            if($result && $data['featured_image'])
            {
                $upload_result = $model->uploadImage($data['featured_image'], 'news');

                if($data['old_featured_image'] != Config::get('default_images.news_' . env('UPLOAD_DRIVER')))
                {   
                    UploadManager::deleteFile($data['old_featured_image'], 'news');
                }

                $model->updateImage($data['id'], $upload_result['filename'], $upload_result['filepath'], News::class);
            }
            
            return $result;
        }

        public function setStatus(array $data): bool
        {
            $model = new News();
            $model->setStatus($data);
            return true;
        }

        public function deleteData(array $data): bool
        {
            $model = new News();

            $blog_images = $model->getImagesByUUID($data);

            $result = $model->deleteData($data);

            foreach($blog_images as $image)
            {
                if($image != Config::get('default_images.news_' . env('UPLOAD_DRIVER')))
                {   
                    UploadManager::deleteFile($image->filename, 'news');
                }
            }
        }
	}