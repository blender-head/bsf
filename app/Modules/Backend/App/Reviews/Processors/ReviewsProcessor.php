<?php
	
	namespace App\Modules\Backend\App\Reviews\Processors;

	use App\Library\Bases\BaseProcessor;
	
	class ReviewsProcessor extends BaseProcessor
	{
		public function process($data, $model)
		{
			try
			{
				switch($data['op_type'])
				{
					case 'index':
						$this->output = $this->getIndexData($model, $data);
						break;

					case 'create':
						$id = $model->save($data);
						break;

					case 'edit':
						$result = $model->update($data);
						break;

					case 'set_status':
						$model->setStatus($data);
						break;

					case 'delete':
						$model->deleteData($data);
						break;
				}

				return true;
			}
			catch(\Error $e)
			{
				$this->error = $e->getMessage();
				return false;
			}
		}
	}