<?php
	
	namespace App\Modules\Backend\App\Band\Requests;

    use App\Library\Bases\BaseRepository;

	class BandRepository extends BaseRepository
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
        }

        public function setValidationData()
        {
            $this->data = [
                'id' => $this->id,
                'name' => $this->name,
                'op_type' => $this->operation_type
            ];
        }

        public function setValidationRules()
        {
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