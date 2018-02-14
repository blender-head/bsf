<?php

	namespace App\Library\Bases;

	use Illuminate\Routing\Controller;

    use App\Library\ErrorManager\ErrorCode;

    use App\Library\Helper\Helper;

    use Format;

	class BaseModuleController extends Controller
	{
        protected function startProcess($input, $form_processor, $data_processor, $model)
	    {
            if($form_processor->validate($input) == false)
            {
                return Format::apiResponse(ErrorCode::ERR_VALIDATION, Format::ioObject('errors', $form_processor->getErrors()), [], 200);
            }
            else
            {
                if($data_processor->process($form_processor->getData(), $model) == false)
                {
                    return Format::apiResponse($data_processor->getErrorCode(), $data_processor->getError(), [], 200);
                }

                return Format::apiResponse(0, 'Success', $data_processor->getOutput(), 200);
            }
	    }

        protected function startIndexListProcess($input, $form_processor, $data_processor, $model)
        {
            if($form_processor->validate($input) == false)
            {
                return json_encode(['error' => $form_processor->getErrors()]);
            }
            else
            {
                if($data_processor->process($form_processor->getData(), $model) == false)
                {
                    return json_encode(['error' => $data_processor->getError()]);
                }

                return json_encode($data_processor->getOutput());
            }
        }
	}
