<?php
	
	namespace App\Modules\Backend\App\News\Requests;

    use App\Library\Bases\BaseRepository;

	class NewsRepository extends BaseRepository
	{
        private $id;
        private $title;
        private $content;
        private $excerpt;
        private $featured_image;
        private $old_featured_image;
        private $status;

        public function setOperation($operation_type)
        {
            $this->operation_type = $operation_type;
        }

        public function getInput($request)
        {   
            $this->id = $request->input('id');
            $this->title = $request->input('title');
            $this->content = $request->input('content');
            $this->excerpt = $request->input('excerpt');
            $this->featured_image = $request->file('featured_image');
            $this->old_featured_image = $request->input('old_featured_image');
            $this->status = $request->input('status');
            $this->page = $request->input('page');
            $this->limit = $request->input('limit');
            $this->draw = $request->input('draw');
            $this->length = $request->input('length');
            $this->start = $request->input('start');
            $this->columns = $request->input('columns');
        }

        public function setValidationData()
        {
            $this->data = [
                'id' => $this->id,
                'title' => $this->title,
                'content' => $this->content,
                'excerpt' => $this->excerpt,
                'featured_image' => $this->featured_image,
                'old_featured_image' => $this->old_featured_image,
                'status' => $this->status,
                'op_type' => $this->operation_type,
                'page' => $this->page,
                'limit' => $this->limit,
                'draw' => $this->draw,
                'length' => $this->length,
                'start' => $this->start,
                'columns' => $this->columns,
            ];
        }

        public function setValidationRules()
        {
            if($this->operation_type == 'index')
            {
                $this->rules = [];
            }

            if($this->operation_type == 'create')
            {
                $this->rules = [
                    'title' => 'required',
                    'content' => 'required',
                    'featured_image' => $this->data['featured_image'] ? 'image|mimes:jpeg,png,jpg|max:200|dimensions:width=950,height=633' : ''
                ];
            }

            if($this->operation_type == 'edit')
            {
                $this->rules = [
                    'id' => 'required',
                    'title' => 'required',
                    'content' => 'required',
                    'featured_image' => $this->data['featured_image'] ? 'image|mimes:jpeg,png,jpg|max:200|dimensions:width=950,height=633' : ''
                ];
            }

            if($this->operation_type == 'delete')
            {
                $this->rules = [
                    'id' => 'required',
                ];
            }

            if($this->operation_type == 'set_status')
            {
                $this->rules = [
                    'id' => 'required',
                    'status' => 'required'
                ];
            }
        }
	}