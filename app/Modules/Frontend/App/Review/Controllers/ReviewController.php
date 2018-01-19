<?php

	namespace App\Modules\Frontend\App\Review\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class ReviewController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('Review::index');
	    }
	}
