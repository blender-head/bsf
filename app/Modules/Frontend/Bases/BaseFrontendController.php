<?php

	namespace App\Modules\Frontend\Bases;

	use App\Library\Bases\BaseModuleController;

    use Theme;

	class BaseFrontendController extends BaseModuleController
	{
		protected $use_sidebar;

	    public function __construct()
        {
            Theme::init('frontend');
        }
	}
