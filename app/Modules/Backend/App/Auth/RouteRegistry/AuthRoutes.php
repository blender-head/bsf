<?php
    
    namespace App\Modules\Backend\App\Auth\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class AuthRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Auth\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX;
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('login', [
                    'as' => $this->route_prefix . '.login', 
                    'uses' => 'AuthController@getLogin'
                ]);

                Route::post('login', [
                    'uses' => 'AuthController@postLogin'
                ]);

                Route::post('logout', [
                    'uses' => 'AuthController@postLogin'
                ]);

            });
        }
    }