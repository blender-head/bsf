<?php

	namespace App\Library\UploadManager\Drivers;

	use File;
	
	use App\Library\UploadManager\Contract\UploadInterface;

	class NativeDriver implements UploadInterface
	{
		const PATH_SEPARATOR = '/';

		private $filename;
		private $destination;
		private $extension;
		private $content_type;

		public function setParentContent($content_type)
		{
			$this->content_type = $content_type;
		}

		public function upload($file, $destination)
		{
			$this->destination = $destination;
			$this->extension = $file->getClientOriginalExtension();
			$this->filename = md5(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
			$file->move($this->destination, $this->filename);
		}

		public function getFileName()
		{
			return $this->filename;
		}

		public function getFilePath()
		{
			return url('/') . self::PATH_SEPARATOR . 'uploads' . self::PATH_SEPARATOR . $this->content_type . self::PATH_SEPARATOR . $this->filename;
		}

		public function getFileExtension()
		{
			return $this->extension;
		}

		public function deleteFile($image, $content_type)
		{
			$path = public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $content_type . DIRECTORY_SEPARATOR . $image;
			File::delete($path);
		}

		public function setOptions($options) {}
	}