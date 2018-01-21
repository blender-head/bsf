<?php

	namespace App\Modules\Backend\App\Review\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Review\Requests\ReviewRepository;
	use App\Modules\Backend\App\Review\Processors\ReviewProcessor;
	use App\Models\Review;

	use View;
	
	class ReviewController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('Review::index');
	    }

	    public function getCreate()
	    {
	    	return View::make('Review::create');
	    }

		public function postCreate(Request $request, ReviewRepository $form_processor, ReviewProcessor $data_processor, Review $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit()
	    {
	    	return View::make('Blog::edit');
	    }

	    public function postEdit(Request $request, ReviewRepository $form_processor, ReviewProcessor $data_processor, Review $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postDelete(Request $request, ReviewRepository $form_processor, ReviewProcessor $data_processor, Review $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
