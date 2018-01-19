<?php
    
    namespace App\Modules\Frontend\App\News\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class NewsRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\News\Controllers';
            $this->route_prefix = 'news';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'news', 
                    'uses' => 'NewsController@getIndex'
                ]);

                Route::get('/news', [
                    'as' => 'news', 
                    'uses' => 'NewsController@getIndex'
                ]);

            });
        }
    }