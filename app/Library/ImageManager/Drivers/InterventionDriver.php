<?php

	namespace App\Library\ImageManager\Drivers;

	use Image;

	use App\Library\ImageManager\Contract\ImageInterface;

	class InterventionDriver implements ImageInterface
	{
		public function crop($image, $x_coord, $y_coord, $width, $height)
		{
			$img = Image::make($image)->crop($width, $height, $x_coord, $y_coord)->save();
		}

		public function resize($image, $width, $height, $filename)
		{
			$img = Image::make($image)->resize($width, $height)->save($filename);
		}
	}