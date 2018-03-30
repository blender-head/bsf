<?php
	
	namespace App\Modules\Backend\App\Reviews\Services;

	use Config;

    use UploadManager;
	
    use App\Models\Reviews;

	class ReviewsServices
	{
		public function save(array $data): int
        {
            $model = new Reviews();
            $id = $model->saveData($data);

            if($id && $data['featured_image'])
            {
                $upload_result = $model->uploadImage($data['featured_image'], 'reviews');
                $model->updateImage($id, $upload_result['filename'], $upload_result['filepath'], Reviews::class);
            }
            
            return $id;
        }

        public function update(array $data): bool
        {
            $model = new Reviews();
            $result = $model->editData($data);

            if($result && $data['featured_image'])
            {
                $upload_result = $model->uploadImage($data['featured_image'], 'reviews');

                if($data['old_featured_image'] != Config::get('default_images.reviews_' . env('UPLOAD_DRIVER')))
                {   
                    UploadManager::deleteFile($data['old_featured_image'], 'reviews');
                }

                $model->updateImage($data['id'], $upload_result['filename'], $upload_result['filepath'], Reviews::class);
            }
            
            return $result;
        }

        public function setStatus(array $data): bool
        {
            $model = new Reviews();
            $model->setStatus($data);
            return true;
        }

        public function deleteData(array $data): bool
        {
            $model = new Reviews();

            $blog_images = $model->getImagesByUUID($data);

            $result = $model->deleteData($data);

            foreach($blog_images as $image)
            {
                if($image != Config::get('default_images.reviews_' . env('UPLOAD_DRIVER')))
                {   
                    UploadManager::deleteFile($image->filename, 'reviews');
                }
            }
        }
	}