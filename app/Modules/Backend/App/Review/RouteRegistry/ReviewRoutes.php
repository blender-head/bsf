<?php
    
    namespace App\Modules\Backend\App\Review\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class ReviewRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Review\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/reviews';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'ReviewController@getIndex'
                ]);

                Route::get('index', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'ReviewController@getIndex'
                ]);

                Route::get('create', [
                    'as' => $this->route_prefix . '.create', 
                    'uses' => 'ReviewController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'ReviewController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => $this->route_prefix . '.edit', 
                    'uses' => 'ReviewController@postEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'ReviewController@postEdit'
                ]);

                Route::post('delete', [
                    'uses' => 'ReviewController@postDelete'
                ]);

            });
        }
    }