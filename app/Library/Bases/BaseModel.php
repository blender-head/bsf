<?php

	namespace App\Library\Bases;
	
	use Illuminate\Database\Eloquent\Model;

	use \Cviebrock\EloquentSluggable\Services\SlugService;

	use Cviebrock\EloquentSluggable\Sluggable;

	use App\Library\Helper\Helper;

	abstract class BaseModel extends Model
	{
		use Sluggable;

		protected $helper;
        
        public function __construct()
		{
			$this->helper = new Helper();
		}

		public function setCreatedAt($value)
        {
            $this->{static::CREATED_AT} = $value->toDateTimeString();
            return $this;
        }

        public function setUpdatedAt($value)
        {
            $this->{static::UPDATED_AT} = $value->toDateTimeString();
            return $this;
        }

        protected function createSlug(string $class, string $column, string $title)
        {
        	return SlugService::createSlug($class, $column, $title);
        }

		abstract public function getAll(array $data);
		abstract public function saveData(array $data);
		abstract public function editData(string $id);
		abstract public function setStatus(string $id);
		abstract public function deleteData(string $id);
		abstract public function prepareIndexData(array $db_data, string $row_number);
	}