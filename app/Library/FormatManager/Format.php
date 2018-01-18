<?php
    
    namespace App\Library\FormatManager;

    use Illuminate\Http\JsonResponse;

	class Format
	{
		public function apiResponse($error_code, $message, $data, $http_code = 200)
        {
            return new JsonResponse([
                'error_code' => $error_code,
                'message' => $message,
                'data' => $data
            ], $http_code);
        }

        public static function ioObject($properties_name, $data, $singular = FALSE)
        {
            $obj = new \stdClass();

            if($data)
            {
                if($singular)
                {
                    foreach($data as $datas)
                    {
                        $result = $datas;
                    }

                    $obj->{$properties_name} = $result;
                }
                else
                {
                    $obj->{$properties_name} = $data;
                }
                
            }
            else
            {
                if($singular)
                {
                    $obj->{$properties_name} = NULL;
                }
                else
                {
                    $obj->{$properties_name} = $data;
                }
            }

            return $obj;
        }
        
        public static function successResponse($payload, $code, $fields, $message, $http_code = 200)
        {
            return JsonResponse::json(array(
                'payload' => $payload,
                'status' => array(
                    'code' => $code,
                    'fields' => $fields,
                    'message' => $message
                ),
            ), $http_code);
        }

        public static function processResponse($error_code, $fields, $message, $http_code = 200)
        {
            return Response::json(array(
                'code' => $error_code,
                'fields' => $fields,
                'message' => $message
            ), $http_code);
        }
	}