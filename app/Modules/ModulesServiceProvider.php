<?php 

    namespace App\Modules;
    
    use \Illuminate\Support\ServiceProvider;

    use \Illuminate\View\FileViewFinder;

    use View;

    class ModulesServiceProvider extends ServiceProvider
    {
        /**
         * Will make sure that the required modules have been fully loaded
         * @return void
         */
        public function boot()
        {
            // For each of the registered modules, include their Views
            $modules = config("modules");

            $paths = [];

            foreach($modules as $module)
            {   
                $module_name = ucwords(strtolower($module['name']));
                $module_type = ucwords(strtolower($module['type']));

                $module_view_path = realpath(app_path('Modules' . '/' . $module_type . '/' . 'App' . '/' . $module_name . '/' . 'Views'));

                // Load the views
        
                if(is_dir($module_view_path)) {
                    //$this->loadViewsFrom($module_name, $module_view_path);
                    View::addNamespace($module_name, $module_view_path);
                }

                array_push($paths, $module_view_path);
            }

            //$merged_paths = array_merge($this->app->config['view']['paths'], $paths);

            //$finder = new \Illuminate\View\FileViewFinder(app()['files'], $merged_paths);
            //View::setFinder($finder);
        }

        public function register() {}

    }