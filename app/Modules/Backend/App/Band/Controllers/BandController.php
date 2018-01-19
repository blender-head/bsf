<?php

	namespace App\Modules\Backend\App\Band\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Band\Requests\BandRepository;
	use App\Modules\Backend\App\Band\Processors\BandProcessor;
	use App\Models\Band;
	
	use View;
	
	class BandController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('Band::index');
	    }

	    public function getCreate()
	    {
	    	return View::make('Band::create');
	    }

		public function postCreate(Request $request, BandRepository $form_processor, BandProcessor $data_processor, Band $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit()
	    {
	    	return View::make('Band::edit');
	    }

	    public function postEdit(Request $request, BandRepository $form_processor, BandProcessor $data_processor, Band $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postDelete(Request $request, BandRepository $form_processor, BandProcessor $data_processor, Band $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
