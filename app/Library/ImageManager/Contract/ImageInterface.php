<?php

	namespace App\Library\ImageManager\Contract;

	interface ImageInterface
	{
		public function crop($image, $x_coord, $y_coord, $width, $height);
		public function resize($image, $width, $height);
	}