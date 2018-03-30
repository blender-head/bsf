<?php

	namespace App\Modules\Backend\App\Reviews\Controllers;

	use Illuminate\Http\Request;
	
	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Reviews\Requests\ReviewsRepository;
	use App\Modules\Backend\App\Reviews\Processors\ReviewsProcessor;
	use App\Models\Reviews;
	use App\Modules\Backend\App\Reviews\Services\ReviewsServices;

	use View;
	
	class ReviewsController extends BaseBackendController
	{
		public function getIndex(Reviews $model)
	    {
	    	return View::make('Reviews::index');
	    }

	    public function postIndex(Request $request, ReviewsRepository $form_processor, ReviewsProcessor $data_processor, Reviews $model)
	    {
	    	$form_processor->setOperation('index');
	    	return $this->startIndexListProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getCreate()
	    {
	    	return View::make('Reviews::create');
	    }

		public function postCreate(Request $request, ReviewsRepository $form_processor, ReviewsProcessor $data_processor, ReviewsServices $service)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $service);
	    }

	    public function getEdit(Request $request, Reviews $model)
	    {
	    	$slug = $request->input('slug');
	    	$data = $model->getBySlug($slug);
	    	return View::make('Reviews::edit', ['review' => $data[0]]);
	    }

	    public function postEdit(Request $request, ReviewsRepository $form_processor, ReviewsProcessor $data_processor, ReviewsServices $service)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $service);
	    }

	    public function postSetStatus(Request $request, ReviewsRepository $form_processor, ReviewsProcessor $data_processor, ReviewsServices $model)
	    {
	    	$form_processor->setOperation('set_status');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	    
	    public function postDelete(Request $request, ReviewsRepository $form_processor, ReviewsProcessor $data_processor, ReviewServices $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
