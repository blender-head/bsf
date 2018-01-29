<?php
	
	namespace App\Modules\Backend\App\Auth\Processors;

	use App\Library\Bases\BaseProcessor;

	use Auth;
	
	class AuthProcessor extends BaseProcessor
	{
		public function process($data, $model)
		{
			try
			{
				switch($data['op_type'])
				{
					case 'login':
						$this->login($data);
						break;
				}

				return true;
			}
			catch(\Error $e)
			{
				$this->error = $e->getMessage();
				$this->error_code = $e->getCode();
				return false;
			}
		}

		private function login($data)
		{
			$credentials = [
		        'email'     => $data['email'],
		        'password'  => $data['password']
		    ];

        	if (!Auth::attempt($credentials)) 
        	{
		    	throw new \Error("Invalid login data", 1000);	
		    } 
		}
	}