<?php
	
	namespace App\Modules\Backend\App\Blog\Processors;

	use App\Library\Bases\BaseProcessor;
	
	class BlogProcessor extends BaseProcessor
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
						$id = $model::save($data);
						break;

					case 'edit':
						$id = $model::edit($data);
						break;

					case 'delete':
						$model::delete($id);
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