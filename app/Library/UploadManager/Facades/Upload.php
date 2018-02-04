<?php

	namespace App\Library\UploadManager\Facades;

	use Illuminate\Support\Facades\Facade;

	class Upload extends Facade
	{
	    protected static function getFacadeAccessor() 
	    {
	     	return 'upload'; 
	    }
	}