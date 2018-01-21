<?php
    
    namespace App\Modules\Backend\App\Home\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class HomeRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Home\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'HomeController@getIndex'
                ]);

            });
        }
    }