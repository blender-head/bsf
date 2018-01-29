<?php
	
	namespace App\Library\Traits;

	use Illuminate\Database\Eloquent\Model;

	trait AjaxDataTrait
	{
		public function getIndexData(Model $model, array $data)
        {      	
        	//$total = $model->getDocCount();

			$output = [];

			$output['draw'] = $data['draw'];

			$output['data'] = [];

			$db_data = $model->getAll($data);

			$total = count($db_data);

			$output['recordsTotal'] = $total;

			$output['recordsFiltered'] = $total;
			
			$row_number = $data['start'] + 1;

			$output['data'] = $model->prepare_index_data($db_data, $row_number);

			return $output;	
        }

        public function post_search(BaseModel $model, array $data)
        {      	
        	$output = [];

			$cursors_w_limit = $model->get_all([
				'user_id' => $data['user_id'],
				'company_owner' => $data['company_owner'],
				'limit' => (int) $data['length'],
				'page' => (int) $data['start'],
				'search' => true,
				'filter' => $data['columns']
			]);

			$cursors_wo_limit = $model->get_all([
				'user_id' => $data['user_id'],
				'company_owner' => $data['company_owner'],
				'limit' => '0',
				'search' => true,
				'filter' => $data['columns']
			]);

			$total = count($cursors_wo_limit);

			$output['draw'] = $data['draw'];

			$output['recordsTotal'] = $total;

			$output['recordsFiltered'] = $total;

			$output['data'] = [];

			$row_number = $data['start'] + 1;

			$output['data'] = $model->prepare_ajax_data($cursors_w_limit, $row_number);

			return $output;	
        }
	}