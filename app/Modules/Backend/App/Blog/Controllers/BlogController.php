<?php

	namespace App\Modules\Backend\App\Blog\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Blog\Requests\BlogRepository;
	use App\Modules\Backend\App\Blog\Processors\BlogProcessor;
	use App\Modules\Backend\App\Blog\Models\BlogModel;

	use View;
	
	class BlogController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('Blog::index');
	    }

	    public function getCreate()
	    {
	    	return View::make('Blog::create');
	    }

		public function postCreate(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogModel $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit()
	    {
	    	return View::make('Blog::edit');
	    }

	    public function postEdit(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogModel $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postDelete(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogModel $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
