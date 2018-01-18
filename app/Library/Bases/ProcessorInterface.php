<?php
	
	namespace App\Library\Bases;
	
	interface ProcessorInterface
	{
		public function process($data, $model);
		public function getError();
		public function getoutput();
	}