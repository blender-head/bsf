<?php

	namespace App\Modules\Frontend\App\Home\Controllers;

	use App\Modules\Frontend\Bases\BaseFrontendController;
	
	use View;
	
	class HomeController extends BaseFrontendController
	{
		public function __construct()
		{
			$this->use_sidebar = true;
			parent::__construct();
		}

		public function getIndex()
	    {
	    	$data['use_sidebar'] = $this->use_sidebar;
	    	return view('Home::index', $data);
	    }
	}
