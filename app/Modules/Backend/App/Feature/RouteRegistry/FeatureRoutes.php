<?php
    
    namespace App\Modules\Backend\App\Feature\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class FeatureRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Feature\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/features';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                
                Route::get('/', [
                    'as' => 'feature.index', 
                    'uses' => 'FeatureController@getIndex'
                ]);

                Route::get('index', [
                    'as' => 'feature.index', 
                    'uses' => 'FeatureController@getIndex'
                ]);

                Route::get('create', [
                    'as' => 'feature.create', 
                    'uses' => 'FeatureController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'FeatureController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => 'feature.edit', 
                    'uses' => 'FeatureController@postEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'FeatureController@postEdit'
                ]);

                Route::post('delete', [
                    'uses' => 'FeatureController@postDelete'
                ]);

            });
        }
    }