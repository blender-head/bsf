<?php

	namespace App\Library\UploadManager\Contract;

	interface UploadInterface
	{
		public function setParentContent($content_type);
		public function upload($image, $destination);
		public function getFileName();
		public function getFilePath();
		public function getFileExtension();
		public function deleteFile($image, $content_type);
		public function setOptions($options);
	}