<?php
    
    namespace App\Modules\Frontend\App\Review\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class ReviewRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Review\Controllers';
            $this->route_prefix = 'reviews';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'reviews', 
                    'uses' => 'ReviewController@getIndex'
                ]);

                Route::get('/reviews', [
                    'as' => 'reviews', 
                    'uses' => 'ReviewController@getIndex'
                ]);

            });
        }
    }