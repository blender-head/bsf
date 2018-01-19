<?php
    
    namespace App\Modules\Frontend\App\Feature\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class FeatureRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Feature\Controllers';
            $this->route_prefix = 'features';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'features', 
                    'uses' => 'FeatureController@getIndex'
                ]);

                Route::get('/features', [
                    'as' => 'features', 
                    'uses' => 'FeatureController@getIndex'
                ]);

            });
        }
    }