<?php

    namespace App\Modules\Backend\App\Auth\Providers;

    use App\Modules\Backend\App\Auth\RouteRegistry\AuthRoutes;

    use Illuminate\Support\ServiceProvider;

    class AuthRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(AuthRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
