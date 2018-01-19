<?php

	namespace App\Modules\Frontend\App\Band\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class BandController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('Band::index');
	    }
	}
