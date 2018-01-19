<?php

	namespace App\Modules\Frontend\App\Event\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class EventController extends BaseFrontendController
	{
		public function getIndex()
	    {
	    	return view('Event::index');
	    }
	}
