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
            Route::group(['prefix' => $this->route_prefix, 'namespace' => $this->controller_ns, 'middleware' => ['web','role:super_admin']], function () {
                
                Route::get('/', [
                    'as' => 'blog.index', 
                    'uses' => 'BlogController@getIndex'
                ]);

                Route::get('index', [
                    'as' => 'blog.index', 
                    'uses' => 'BlogController@getIndex'
                ]);

                Route::post('index', [
                    'uses' => 'BlogController@postIndex'
                ]);

                Route::get('create', [
                    'as' => 'blog.create', 
                    'uses' => 'BlogController@getCreate'
                ]);

                Route::post('create', [
                    'uses' => 'BlogController@postCreate'
                ]);

                Route::get('edit', [
                    'as' => 'blog.edit', 
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