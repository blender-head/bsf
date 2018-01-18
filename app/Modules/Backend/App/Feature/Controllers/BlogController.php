<?php

	namespace App\Modules\Backend\App\Feature\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Feature\Requests\FeatureRepository;
	use App\Modules\Backend\App\Feature\Processors\FeatureProcessor;
	use App\Modules\Backend\App\Feature\Models\FeatureModel;

	use View;
	
	class FeatureController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('Feature::index');
	    }

	    public function getCreate()
	    {
	    	return View::make('Feature::create');
	    }

		public function postCreate(Request $request, FeatureRepository $form_processor, FeatureProcessor $data_processor, FeatureModel $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit()
	    {
	    	return View::make('Feature::edit');
	    }

	    public function postEdit(Request $request, FeatureRepository $form_processor, FeatureProcessor $data_processor, FeatureModel $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postDelete(Request $request, FeatureRepository $form_processor, FeatureProcessor $data_processor, FeatureModel $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
