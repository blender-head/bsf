<?php

	namespace App\Library\UploadManager;

	use App\Library\UploadManager\Drivers\NativeDriver;
	use App\Library\UploadManager\Drivers\CloudinaryDriver;

	class UploadManager
	{
		private $driver;

		public function __construct()
		{
			$this->driver = env('UPLOAD_DRIVER', 'native');
		}

		public function getDriver()
		{
			switch($this->driver)
			{
				case 'native':
					return new NativeDriver();
					break;

				case 'cloudinary':
					return new CloudinaryDriver();
					break;
			}
		}
	}