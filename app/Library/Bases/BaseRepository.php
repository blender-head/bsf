<?php
	
	namespace App\Library\Bases;
	
	use Validator;
	
	abstract class BaseRepository implements RepositoryInterface
	{
		protected $data;
		protected $rules;
		protected $errors;
		protected $operation_type;

		abstract public function setOperation($operation_type);

		abstract public function getInput($request);

		abstract public function setValidationData();

		abstract public function setValidationRules();

		public function validate($request)
		{
			$this->getInput($request);
			$this->setValidationData();
			$this->setValidationRules();

			$validation = Validator::make($this->data, $this->rules);

			if($validation->fails())
			{
				$this->errors = $validation->errors();
				return FALSE;
			}

			return TRUE;
		}

		public function getErrors()
		{
			return $this->errors;
		}

		public function getData()
		{
			return $this->data;
		}
	}