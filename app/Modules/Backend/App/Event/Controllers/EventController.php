<?php

	namespace App\Modules\Backend\App\Event\Controllers;

	use App\Modules\Backend\Bases\BaseBackendController;

	use App\Modules\Backend\App\Event\Requests\EventRepository;
	use App\Modules\Backend\App\Event\Processors\EventProcessor;
	use App\Modules\Backend\App\Event\Models\EventModel;

	use View;
	
	class EventController extends BaseBackendController
	{
		public function getIndex()
	    {
	    	return View::make('Event::index');
	    }

	    public function getCreate()
	    {
	    	return View::make('Event::create');
	    }

		public function postCreate(Request $request, EventRepository $form_processor, EventProcessor $data_processor, EventModel $model)
	    {
	    	$form_processor->setOperation('create');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function getEdit()
	    {
	    	return View::make('Event::edit');
	    }

	    public function postEdit(Request $request, EventRepository $form_processor, EventProcessor $data_processor, EventModel $model)
	    {
	    	$form_processor->setOperation('edit');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }

	    public function postDelete(Request $request, EventRepository $form_processor, EventProcessor $data_processor, EventModel $model)
	    {
	    	$form_processor->setOperation('delete');
	    	return $this->startProcess($request, $form_processor, $data_processor, $model);
	    }
	}
