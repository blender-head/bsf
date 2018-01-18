<?php
	
	namespace App\Library\Bases;
	
	use Laravel\Lumen\Application;

	abstract class BaseModuleRoute
	{
		protected $controller_ns;
        protected $route_prefix;
        
        const BE_PREFIX = 'senyap';
        const FE_PREFIX = 'bingar';

        abstract public function bind();
	}