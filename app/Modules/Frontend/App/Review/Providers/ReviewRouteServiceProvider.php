<?php

    namespace App\Modules\Frontend\App\Review\Providers;

    use App\Modules\Frontend\App\Review\RouteRegistry\ReviewRoutes;

    use Illuminate\Support\ServiceProvider;

    class ReviewRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(ReviewRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
