<?php

	namespace App\Modules\Frontend\App\Feature\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class FeatureController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('Feature::index');
	    }
	}
