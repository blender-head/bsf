<?php

	namespace App\Modules\Frontend\App\Statcontent\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class StatcontentController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('Statcontent::index');
	    }
	}
