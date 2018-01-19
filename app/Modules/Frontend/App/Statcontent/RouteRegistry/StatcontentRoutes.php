<?php
    
    namespace App\Modules\Frontend\App\Statcontent\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class StatcontentRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Statcontent\Controllers';
        }

        public function bind()
        {
            Route::group(['namespace' => $this->controller_ns], function () {
                    
                Route::get('/about', [
                    'as' => 'about', 
                    'uses' => 'StatcontentController@getAbout'
                ]);

                Route::get('/contact', [
                    'as' => 'contact', 
                    'uses' => 'StatcontentController@getContact'
                ]);

            });
        }
    }