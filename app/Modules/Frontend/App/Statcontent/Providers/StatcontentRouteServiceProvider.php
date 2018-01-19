<?php

    namespace App\Modules\Frontend\App\Statcontent\Providers;

    use App\Modules\Frontend\App\Statcontent\RouteRegistry\StatcontentRoutes;

    use Illuminate\Support\ServiceProvider;

    class StatcontentRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(StatcontentRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
