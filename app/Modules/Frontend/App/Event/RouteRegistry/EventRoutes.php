<?php
    
    namespace App\Modules\Frontend\App\Event\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class EventRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Frontend\App\Event\Controllers';
            $this->route_prefix = 'events';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns], function () {
                    
                Route::get('/', [
                    'as' => 'events', 
                    'uses' => 'EventController@getIndex'
                ]);

                Route::get('/events', [
                    'as' => 'events', 
                    'uses' => 'EventController@getIndex'
                ]);

            });
        }
    }