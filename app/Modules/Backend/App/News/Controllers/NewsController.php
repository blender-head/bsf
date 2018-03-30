<?php

	namespace App\Modules\Backend\App\News\Controllers;

	use Illuminate\Http\Request;
	
	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\News\Requests\NewsRepository;
	use App\Modules\Backend\App\News\Processors\NewsProcessor;
	use App\Models\News;
	use App\Modules\Backend\App\News\Services\NewsServices;

	use View;
	
	class NewsController extends BaseBackendController
	{
		public function getIndex(News $model)
	    {
	    	return View::make('News::index');
	    }

	    public function postIndex(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, News $model)
	    {
	    	$form_processor->setOperation('index');
	    	return $this->startIndexListProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getCreate()
	    {
	    	return View::make('News::create');
	    }

		public function postCreate(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, NewsServices $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit(Request $request, News $model)
	    {
	    	$slug = $request->input('slug');
	    	$data = $model->getBySlug($slug);
	    	return View::make('News::edit', ['news' => $data[0]]);
	    }

	    public function postEdit(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, NewsServices $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postSetStatus(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, NewsServices $model)
	    {
	    	$form_processor->setOperation('set_status');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	    
	    public function postDelete(Request $request, NewsRepository $form_processor, NewsProcessor $data_processor, NewsServices $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
