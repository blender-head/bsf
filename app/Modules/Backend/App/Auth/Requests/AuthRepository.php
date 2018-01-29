<?php
	
	namespace App\Modules\Backend\App\Auth\Requests;

    use App\Library\Bases\BaseRepository;

	class AuthRepository extends BaseRepository
	{
		private $email;
		private $password;

		public function setOperation($operation_type)
        {
            $this->operation_type = $operation_type;
        }

        public function getInput($request)
        {	
            $this->email = $request->input('email');
            $this->password = $request->input('password');
        }

        public function setValidationData()
        {
            $this->data = [
                'email' => $this->email,
                'password' => $this->password,
                'op_type' => $this->operation_type
            ];
        }

        public function setValidationRules()
        {
            switch($this->operation_type)
            {
                case 'login':
                    $this->rules = [
                        'email' => 'required|email',
                        'password' => 'required'
                    ];

                    break;

                default:
                    $this->rules = [];
                    break;
            }
        }
	}