<?php

	namespace App\Library;

	use App\Library\ImageManager\Drivers\InterventionDriver;

	class ImageManager
	{
		private $driver;

		public function __construct()
		{
			$this->driver = env('IMAGE_DRIVER', 'intervention');
		}

		public function getDriver()
		{
			switch($this->driver)
			{
				case 'intervention':
					return new InterventionDriver();
					break;
			}
		}
	}