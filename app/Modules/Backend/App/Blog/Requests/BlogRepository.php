<?php
	
	namespace App\Modules\Backend\App\Blog\Requests;

    use App\Library\Bases\BaseRepository;

	class BlogRepository extends BaseRepository
	{
        private $id;
		private $name;

		public function setOperation($operation_type)
        {
            $this->operation_type = $operation_type;
        }

        public function getInput($request)
        {	
            $this->id = $request->input('id');
            $this->name = $request->input('name');
            $this->page = $request->input('page');
            $this->limit = $request->input('limit');
            $this->draw = $request->input('draw');
            $this->length = $request->input('length');
            $this->start = $request->input('start');
            $this->columns = $request->input('columns');
        }

        public function setValidationData()
        {
            $this->data = [
                'id' => $this->id,
                'name' => $this->name,
                'op_type' => $this->operation_type,
                'page' => $this->page,
                'limit' => $this->limit,
                'draw' => $this->draw,
                'length' => $this->length,
                'start' => $this->start,
                'columns' => $this->columns,
            ];
        }

        public function setValidationRules()
        {
            if($this->operation_type == 'index')
            {
                $this->rules = [];
            }

            if($this->operation_type == 'create')
            {
                $this->rules = [];
            }

            if($this->operation_type == 'edit')
            {
                $this->rules = [];
            }

            if($this->operation_type == 'delete')
            {
                $this->rules = [];
            }
        }
	}