<?php

	namespace App\Modules\Frontend\App\News\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class NewsController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('News::index');
	    }
	}
