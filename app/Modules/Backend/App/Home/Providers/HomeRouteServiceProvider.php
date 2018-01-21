<?php

    namespace App\Modules\Backend\App\Home\Providers;

    use App\Modules\Backend\App\Home\RouteRegistry\HomeRoutes;

    use Illuminate\Support\ServiceProvider;

    class HomeRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(HomeRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
