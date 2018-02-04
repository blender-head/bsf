<?php

	namespace App\Modules\Backend\Bases;

	use App\Library\Bases\BaseModuleController;

    use Theme;

	class BaseBackendController extends BaseModuleController
	{
	    public function __construct()
        {
        	parent::__construct();
        	Theme::init('backend');
        }
	}
