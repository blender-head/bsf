<?php

    namespace App\Console\Commands;

    use Illuminate\Console\Command;

    use File;

    class GenerateConfig extends Command
    {
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'generate:config';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'Generate config for different environment.';

        private $env;
        
        private $config_source;

        private $config_destination;
        
        private $config_path;

        const DS = '/';

        /**
         * Create a new command instance.
         *
         * @return void
         */
        public function __construct()
        {
            parent::__construct();
            $this->config_path = config_path() . self::DS;
            $this->config_destination = base_path() . self::DS . '.env';
        }

        /**
         * Execute the console command.
         *
         * @return mixed
         */
        public function handle()
        {
            $this->env = $this->ask('Environment to set? [dev/staging/prod]');
            
            $valid_env = ['dev','staging','prod'];

            while(!in_array($this->env, $valid_env))
            {
                $this->error("That's not a valid environment name. Please choose from one of the following: [dev/staging/prod]");
                $this->env = $this->ask('Environment to set (dev/staging/prod) ?');
            }

            $confirm_text = 'Continue to setup the "' . $this->env . '" environment?';

            if ($this->confirm($confirm_text)) 
            {
                $this->checkConfig();
                $this->createConfig();
            }
        }

        private function checkConfig()
        {
            if(!File::exists($this->config_path . $this->env))
            {
                $not_exist_text = '"' . $this->env . '"' . ' folder does not exist. Please create a folder called "' . $this->env . '" inside config folder.';
                $this->error($not_exist_text);
                exit;
            }

            $this->config_source = $this->config_path . $this->env . self::DS . 'env';

            if(!File::exists($this->config_source))
            {
                $not_exist_text = 'env file does not exist in "' . $this->env . '" folder. Please setup your "' . $this->env . '" env first.';
                $this->error($not_exist_text);
                exit;
            }
        }

        private function createConfig()
        {
            try
            {
                File::copy($this->config_source, $this->config_destination);
                $this->info('"' . $this->env . '" environment file successfully created.');
            }
            catch(\Exception $e)
            {
                $this->error($e->getMessage());
                exit;
            }
        }
    }
