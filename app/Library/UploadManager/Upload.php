<?php

	namespace App\Library\UploadManager;

	class Upload
	{
		private $filename;
		private $destination;
		private $extension;

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
			return $this->destination . $this->filename;
		}

		public function getFileExtension()
		{
			return $this->extension;
		}
	}