<?php
    
    namespace App\Modules\Backend\App\News\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class NewsRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\News\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/news';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'NewsController@getIndex'
                ]);

                Route::get('index', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'NewsController@getIndex'
                ]);

                Route::get('create', [
                    'as' => $this->route_prefix . '.create', 
                    'uses' => 'NewsController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'NewsController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => $this->route_prefix . '.edit', 
                    'uses' => 'NewsController@postEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'NewsController@postEdit'
                ]);

                Route::post('delete', [
                    'uses' => 'NewsController@postDelete'
                ]);

            });
        }
    }