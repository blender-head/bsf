<?php

    namespace App\Modules\Backend\App\Event\Providers;

    use App\Modules\Backend\App\Event\RouteRegistry\EventRoutes;

    use Illuminate\Support\ServiceProvider;

    class EventRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(EventRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
