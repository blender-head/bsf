<?php
	
	namespace App\Modules\Backend\App\Blog\Services;

	use Config;

	use App\Models\Blog;

	use Upload;
	
	class BlogServices
	{
		public function save(array $data): int
        {
            $model = new Blog();
            $id = $model->saveData($data);

            if($id)
            {
            	$filename = $this->upload($data['featured_image']);
            	$this->updateImage($id, $filename);
            }

            return $id;
        }

        public function upload(\Illuminate\Http\UploadedFile $featured_image): string
        {
        	Upload::upload($featured_image, Config::get('upload_path.blog'));
        	return Upload::getFilename();
        }

        public function updateImage(int $id, string $filename)
        {
        	$model = Blog::find($id);
        	$model->image_normal = $filename;
			$model->image_thumbnail = $filename;
			$model->save();
        }
	}