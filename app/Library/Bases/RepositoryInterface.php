<?php
	
	namespace App\Library\Bases;
	
	interface RepositoryInterface
	{
		public function validate($request);
		public function getErrors();
		public function getData();
	}