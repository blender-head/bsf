<?php
	
	namespace App\Modules\Backend\App\Feature\Processors;

	use App\Library\Bases\BaseProcessor;
	
	class FeatureProcessor extends BaseProcessor
	{
		public function process($data, $model)
		{
			try
			{
				switch($data['op_type'])
				{
					case 'create':
						$id = $model::save($data);
						break;

					case 'edit':
						$id = $model::edit($data);
						break;

					case 'delete':
						$model::delete($id);
						break;
				}

				$this->output = $id;
				return true;
			}
			catch(\Error $e)
			{
				$this->error = $e->getMessage();
				return false;
			}
		}
	}