<?php
    
    namespace App\Modules\Frontend\App\Home\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class HomeRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Home\Controllers';
        }

        public function bind()
        {
            Route::group(['namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'home', 
                    'uses' => 'HomeController@getIndex'
                ]);

            });
        }
    }