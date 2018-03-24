<?php

	namespace App\Library\UploadManager\Facades;

	use Illuminate\Support\Facades\Facade;

	class UploadManager extends Facade
	{
	    protected static function getFacadeAccessor() 
	    {
	     	return 'upload_manager'; 
	    }
	}