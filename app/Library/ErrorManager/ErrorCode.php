<?php
    
    namespace App\Library\ErrorManager;

    class ErrorCode
	{
		const ERR_VALIDATION = 400; // form validation error code
        const ERR_MISSING_TOKEN = 401; // missing token error code
        const ERR_USER_NOT_FOUND = 204; // user not found error code
        const ERR_LOGIN_INVALID = 401; // error username/password code
	}