<?php

	namespace App\Modules\Frontend\App\Blog\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class BlogController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('Blog::index');
	    }
	}
