<?php
    
    namespace App\Modules\Frontend\App\Blog\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class BlogRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Blog\Controllers';
            $this->route_prefix = 'blogs';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'blogs', 
                    'uses' => 'BlogController@getIndex'
                ]);

                Route::get('/blogs', [
                    'as' => 'blogs', 
                    'uses' => 'BlogController@getIndex'
                ]);

            });
        }
    }