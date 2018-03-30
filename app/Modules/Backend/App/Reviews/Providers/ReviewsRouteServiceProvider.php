<?php

    namespace App\Modules\Backend\App\Reviews\Providers;

    use App\Modules\Backend\App\Reviews\RouteRegistry\ReviewsRoutes;

    use Illuminate\Support\ServiceProvider;

    class ReviewsRouteServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $registry = $this->app->make(ReviewsRoutes::class);

            if (!is_object($registry)) {
                Log::info('Not adding any service routes - route file is missing');
                return;
            }
          
            $registry->bind(app());
        }
    }
