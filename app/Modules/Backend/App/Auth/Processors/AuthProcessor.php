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
						$model->login($data);
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
	}