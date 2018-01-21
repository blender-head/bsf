<?php

	namespace App\Modules\Backend\App\Home\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use View;
	
	class HomeController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('Home::index');
	    }
	}
