<?php
    
    namespace App\Modules\Frontend\App\Band\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class BandRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Band\Controllers';
            $this->route_prefix = 'bands';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'bands', 
                    'uses' => 'BandController@getIndex'
                ]);

                Route::get('/bands', [
                    'as' => 'bands', 
                    'uses' => 'BandController@getIndex'
                ]);

            });
        }
    }