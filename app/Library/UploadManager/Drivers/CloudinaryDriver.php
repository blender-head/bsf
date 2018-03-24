<?php

	namespace App\Library\UploadManager\Drivers;

	use App\Library\UploadManager\Contract\UploadInterface;

	use Cloudder;

	class CloudinaryDriver implements UploadInterface
	{
		private $filename;
		private $filepath;
		private $destination;
		private $extension;
		private $options;
		private $path;

		private $content_type;

		public function setParentContent($content_type)
		{
			$this->content_type = $content_type;
		}

		public function upload($file, $destination)
		{
			Cloudder::upload($file, null, $destination);

			$upload_result = Cloudder::getResult();

			$this->filename = $upload_result['public_id'];

            list($width, $height) = getimagesize($file);
            $this->filepath = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
		}

		public function getFileName()
		{
			return $this->filename;
		}

		public function getFilePath()
		{
			return $this->filepath;
		}

		public function getFileExtension()
		{
			return $this->extension;
		}

		public function deleteFile($image, $content_type)
		{
			Cloudder::delete($image);
		}

		public function setOptions($options)
		{
			$this->options = $options;
		}
	}