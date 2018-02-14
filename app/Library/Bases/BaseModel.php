<?php

	namespace App\Library\Bases;
	
	use Illuminate\Database\Eloquent\Model;

	use \Cviebrock\EloquentSluggable\Services\SlugService;

	use Cviebrock\EloquentSluggable\Sluggable;

	use Carbon\Carbon;

	use App\Library\Helper\Helper;

	abstract class BaseModel extends Model
	{
		use Sluggable;

		/**
         *  Override Eloquent created_at value
         *  @param Carbon $value
         *  @return string
         */
		public function setCreatedAt($value): string
        {
            $this->{static::CREATED_AT} = $value->toDateTimeString();
            return $this;
        }

        /**
         *  Override Eloquent updated_at value
         *  @param Carbon $value
         *  @return string
         */
        public function setUpdatedAt($value): string
        {
            $this->{static::UPDATED_AT} = $value->toDateTimeString();
            return $this;
        }

        /**
         *  Create slug from content title
         *  @param string $class
         *  @param string $column
         *  @param string $title
         *  @return string
         */
        protected function createSlug(string $class, string $column, string $title): string
        {
        	return SlugService::createSlug($class, $column, $title);
        }

        protected function updateImage(int $id, string $filename, string $model)
        {
            $model = $model::find($id);
            $model->image_normal = $filename;
            $model->image_thumbnail = $filename;
            $model->save();
        }
        
		abstract public function getAll(array $data): array;
		abstract public function saveData(array $data): int;
		abstract public function editData(array $data): bool;
		abstract public function setStatus(array $data): bool;
		abstract public function deleteData(array $data): bool;
		abstract public function prepareIndexData(array $db_data, string $row_number): array;
	}