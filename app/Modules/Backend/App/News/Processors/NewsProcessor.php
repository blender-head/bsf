<?php
	
	namespace App\Modules\Backend\App\News\Processors;

	use App\Library\Bases\BaseProcessor;
	
	class NewsProcessor extends BaseProcessor
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