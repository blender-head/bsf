<?php

    namespace App\Modules\Frontend\App\Feature\Providers;

    use App\Modules\Frontend\App\Feature\RouteRegistry\FeatureRoutes;

    use Illuminate\Support\ServiceProvider;

    class FeatureRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(FeatureRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
