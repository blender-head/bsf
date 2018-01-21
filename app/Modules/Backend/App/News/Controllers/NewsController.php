<?php

	namespace App\Modules\Backend\App\News\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\News\Requests\NewsRepository;
	use App\Modules\Backend\App\News\Processors\NewsProcessor;
	use App\Models\News;

	use View;
	
	class NewsController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('News::index');
	    }

	    public function getCreate()
	    {
	    	return View::make('News::create');
	    }

		public function postCreate(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, News $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit()
	    {
	    	return View::make('Blog::edit');
	    }

	    public function postEdit(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, News $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postDelete(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, News $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
