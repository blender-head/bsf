<?php
	
	namespace App\Library\Bases;
	
	abstract class BaseProcessor implements ProcessorInterface
	{
		protected $error;
		protected $error_code;
		protected $output;
		
		abstract function process($data, $model);

		public function getError()
        {
        	return $this->error;
        }

        public function getOutput()
        {
        	return $this->output;
        }

        public function getErrorCode()
        {
        	return $this->error_code;
        }
	}