<?php
    
    use Illuminate\Database\Seeder;

    use App\Models\User;

    class AdminUserSeeder extends Seeder
    {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            User::truncate();

            User::create(array(
                'name'     => 'Super Admin',
                'email'    => 'admin@bsf.com',
                'password' => Hash::make('12345678'),
                'is_admin' => 1,
                'is_active' => 1
            ));
        }

    }
