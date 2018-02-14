<?php 

    namespace App\Modules;
    
    use \Illuminate\Support\ServiceProvider;

    use \Illuminate\View\FileViewFinder;

    use View;

    use App\Library\Bases\BaseModuleRoute;

    class ModulesServiceProvider extends ServiceProvider
    {
        /**
         * Will make sure that the required modules have been fully loaded
         * @return void
         */
        public function boot()
        {
            $this->register_module_views();
            $this->set_shared_views();
        }

        public function register() {}

        private function register_module_views()
        {
            // For each of the registered modules, include their Views
            $modules = config("modules");

            foreach($modules as $module)
            {   
                $module_name = ucwords(strtolower($module['name']));
                $module_type = ucwords(strtolower($module['type']));

                $module_view_path = realpath(app_path('Modules' . '/' . $module_type . '/' . 'App' . '/' . $module_name . '/' . 'Views'));

                // Load the views
                if(is_dir($module_view_path)) {
                    View::addNamespace($module_name, $module_view_path);
                }
            }
        }

        private function set_shared_views()
        {
            view()->composer('*', function ($view) {
                $view->be_prefix = BaseModuleRoute::BE_PREFIX;
            });
        }
    }