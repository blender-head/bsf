<?php

    namespace App\Library\FormatManager\Providers;

    use Illuminate\Support\ServiceProvider;

    use App\Library\FormatManager\Format;

    class FormatManagerServiceProvider extends ServiceProvider
    {
        /**
         * Register the application services.
         *
         * @return void
         */
        public function register()
        {
            $this->app->singleton('format', function ($app) {
                return new Format();
            });
        }
    }
