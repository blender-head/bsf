<?php
    
    namespace App\Modules\Backend\App\Band\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class BandRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Band\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/bands';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => 'band.index', 
                    'uses' => 'BandController@getIndex'
                ]);

                Route::get('index', [
                    'as' => 'band.index', 
                    'uses' => 'BandController@getIndex'
                ]);

                Route::get('create', [
                    'as' => 'band.create', 
                    'uses' => 'BandController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'BandController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => 'band.edit', 
                    'uses' => 'BandController@postEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'BandController@postEdit'
                ]);

                Route::post('delete', [
                    'uses' => 'BandController@postDelete'
                ]);

            });
        }
    }