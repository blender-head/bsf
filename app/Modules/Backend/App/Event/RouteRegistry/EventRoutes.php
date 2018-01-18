<?php
    
    namespace App\Modules\Backend\App\Event\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class EventRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Event\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/events';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'EventController@getIndex'
                ]);

                Route::get('index', [
                    'as' => $this->route_prefix . '.index', 
                    'uses' => 'EventController@getIndex'
                ]);

                Route::get('create', [
                    'as' => $this->route_prefix . '.create', 
                    'uses' => 'EventController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'EventController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => $this->route_prefix . '.edit', 
                    'uses' => 'EventController@postEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'EventController@postEdit'
                ]);

                Route::post('delete', [
                    'uses' => 'EventController@postDelete'
                ]);

            });
        }
    }