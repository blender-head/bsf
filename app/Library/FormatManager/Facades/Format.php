<?php

	namespace App\Library\FormatManager\Facades;

	use Illuminate\Support\Facades\Facade;

	class Format extends Facade
	{
	    protected static function getFacadeAccessor() 
	    {
	     	return 'format'; 
	    }
	}