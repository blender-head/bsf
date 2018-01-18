<?php

	namespace App\Modules\Backend\App\Auth\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;
	
	use View;
	
	class AuthController extends BaseBackendController
	{
		public function getLogin()
	    {
	    	return view('Auth::login');
	    }

		public function postLogin(Request $request, AuthRepository $form_processor, AuthProcessor $data_processor, AuthModel $model)
	    {
	    	$form_processor->setOperation('login');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postLogout(Request $request, AuthRepository $form_processor, AuthProcessor $data_processor, AuthModel $model)
	    {
	    	$form_processor->setOperation('logout');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
