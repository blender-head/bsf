<?php

    namespace App\Library\UploadManager\Providers;

    use Illuminate\Support\ServiceProvider;

    use App\Library\UploadManager\Upload;

    class UploadManagerServiceProvider extends ServiceProvider
    {
        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app->singleton('upload', function ($app) {
                return new Upload();
            });
        }
    }
