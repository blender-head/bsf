<?php
    
    namespace App\Modules\Backend\App\Blog\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class BlogRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Blog\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/blogs';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'BlogController@getIndex'
                ]);

                Route::get('index', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'BlogController@getIndex'
                ]);

                Route::get('create', [
                    'as' => $this->route_prefix . '.create', 
                    'uses' => 'BlogController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'BlogController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => $this->route_prefix . '.edit', 
                    'uses' => 'BlogController@postEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'BlogController@postEdit'
                ]);

                Route::post('delete', [
                    'uses' => 'BlogController@postDelete'
                ]);

            });
        }
    }