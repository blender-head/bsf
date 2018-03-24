<?php

    namespace App\Library\UploadManager\Providers;

    use Illuminate\Support\ServiceProvider;

    use App\Library\UploadManager\UploadManager;

    class UploadManagerServiceProvider extends ServiceProvider
    {
        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app->singleton('upload_manager', function ($app) {
                $image_manager = new UploadManager();
                $driver = $image_manager->getDriver();
                return $driver;
            });
        }
    }
