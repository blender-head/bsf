<?php
    
    namespace App\Modules\Backend\App\Reviews\RouteRegistry;

    use Route;

    use App\Library\Bases\BaseModuleRoute;

    class ReviewsRoutes extends BaseModuleRoute
    {
        public function __construct()
        {
            $this->controller_ns = 'App\Modules\Backend\App\Reviews\Controllers';
            $this->route_prefix = BaseModuleRoute::BE_PREFIX . '/reviews';
        }

        public function bind()
        {
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns, 'middleware' => ['web','role:super_admin']], function () {
                
                Route::get('/', [
                    'as' => 'reviews.index', 
                    'uses' => 'ReviewsController@getIndex'
                ]);

                Route::get('index', [
                    'as' => 'reviews.index', 
                    'uses' => 'ReviewsController@getIndex'
                ]);

                Route::post('index', [
                    'uses' => 'ReviewsController@postIndex'
                ]);

                Route::get('create', [
                    'as' => 'reviews.create', 
                    'uses' => 'ReviewsController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'ReviewsController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => 'reviews.edit', 
                    'uses' => 'ReviewsController@getEdit'
                ]);

                Route::post('edit', [
                    'uses' => 'ReviewsController@postEdit'
                ]);

                Route::post('set_status', [
                    'uses' => 'ReviewsController@postSetStatus'
                ]);

                Route::post('delete', [
                    'uses' => 'ReviewsController@postDelete'
                ]);

            });
        }
    }