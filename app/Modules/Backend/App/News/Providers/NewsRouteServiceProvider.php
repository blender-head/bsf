<?php

    namespace App\Modules\Backend\App\News\Providers;

    use App\Modules\Backend\App\News\RouteRegistry\NewsRoutes;

    use Illuminate\Support\ServiceProvider;

    class NewsRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(NewsRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
