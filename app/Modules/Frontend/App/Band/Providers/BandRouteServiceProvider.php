<?php

    namespace App\Modules\Frontend\App\Band\Providers;

    use App\Modules\Frontend\App\Band\RouteRegistry\BandRoutes;

    use Illuminate\Support\ServiceProvider;

    class BandRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(BandRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
