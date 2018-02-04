<?php

    namespace App\Library\ImageManager\Providers;

    use Illuminate\Support\ServiceProvider;

    use App\Library\ImageManager;

    class ImageManagerServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap the application services.
         *
         * @return void
         */
        public function boot()
        {
            //
        }

        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app->singleton('image_manager', function ($app) {
                $image_manager = new ImageManager();
                $driver = $image_manager->getDriver();
                return $driver;
            });
        }
    }
