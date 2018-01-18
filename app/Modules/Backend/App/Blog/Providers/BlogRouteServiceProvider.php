<?php

    namespace App\Modules\Backend\App\Blog\Providers;

    use App\Modules\Backend\App\Blog\RouteRegistry\BlogRoutes;

    use Illuminate\Support\ServiceProvider;

    class BlogRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(BlogRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
