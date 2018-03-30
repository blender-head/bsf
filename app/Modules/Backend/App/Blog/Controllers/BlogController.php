<?php

	namespace App\Modules\Backend\App\Blog\Controllers;

	use Illuminate\Http\Request;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Blog\Requests\BlogRepository;
	use App\Modules\Backend\App\Blog\Processors\BlogProcessor;
	use App\Models\Blog;
	use App\Modules\Backend\App\Blog\Services\BlogServices;

	use View;
	
	class BlogController extends BaseBackendController
	{
		public function getIndex(Blog $model)
	    {
	    	return View::make('Blog::index');
	    }

	    public function postIndex(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, Blog $model)
	    {
	    	$form_processor->setOperation('index');
	    	return $this->startIndexListProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getCreate()
	    {

	    	return View::make('Blog::create');
	    }

		public function postCreate(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogServices $service)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $service);
	    }

	    public function getEdit(Request $request, Blog $model)
	    {
	    	$slug = $request->input('slug');
	    	$data = $model->getBySlug($slug);
	    	return View::make('Blog::edit', ['blog' => $data[0]]);
	    }

	    public function postEdit(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogServices $service)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $service);
	    }

	    public function postSetStatus(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogServices $model)
	    {
	    	$form_processor->setOperation('set_status');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	    
	    public function postDelete(Request $request, BlogRepository $form_processor, BlogProcessor $data_processor, BlogServices $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
