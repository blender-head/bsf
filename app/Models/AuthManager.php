<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    use Auth;

    class AuthManager
    {
        public function login($data)
        {
        	$credentials = [
		        'email'     => $data['email'],
		        'password'  => $data['password'],
		    ];

        	if (!Auth::attempt($credentials,true)) 
        	{
		    	throw new \Error("Invalid login data", 1000);	
		    } 
        }
    }