<?php

	namespace App\Library\Bases;

	use Illuminate\Routing\Controller;

    use App\Library\ErrorManager\ErrorCode;

    use Format;

	class BaseModuleController extends Controller
	{
	    protected function startProcess($input, $form_processor, $data_processor, $model)
	    {
            if($form_processor->validate($input) == false)
            {
                return Format::apiResponse(ErrorCode::ERR_VALIDATION, Format::ioObject('errors', $form_processor->getErrors()), [], ErrorCode::ERR_VALIDATION);
            }
            else
            {
                if($data_processor->process($form_processor->getData(), $model) == false)
                {
                    return Format::apiResponse($data_processor->getErrorCode(), $data_processor->getError(), [], $data_processor->getErrorCode());
                }
                return Format::apiResponse(0, 'Success', $data_processor->getOutput(), 200);
            }
	    }
	}
