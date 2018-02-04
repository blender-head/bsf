<?php

	namespace App\Library\ImageManager\Facades;

	use Illuminate\Support\Facades\Facade;

	class ImageManager extends Facade
	{
	    protected static function getFacadeAccessor() 
	    {
	     	return 'image_manager'; 
	    }
	}