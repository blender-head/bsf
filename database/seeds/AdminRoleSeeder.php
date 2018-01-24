<?php
    
    use Illuminate\Database\Seeder;

    use App\Models\Role;
    use App\Models\Permission; 
    use App\Models\User; 

    class AdminRoleSeeder extends Seeder
    {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Role::truncate();
            Permission::truncate();

            $admin_role = new Role();
            $admin_role->name = 'super_admin';
            $admin_role->display_name = 'Super Admin';
            $admin_role->description = 'Super Admin Role';
            $admin_role->save();

            $admin_perm = new Permission();
            $admin_perm->name = 'access_all';
            $admin_perm->display_name = 'Access All';
            $admin_perm->description = 'Super Admin could access all aspects of backend';
            $admin_perm->save();

            if (!$admin_role->perms()->get()->contains('id', $admin_perm->id)) {
                $admin_role->attachPermission($admin_perm);

                $user_entity = User::where('id','=',1)->first();
                $user_entity->attachRole($admin_role);
            }
        }

    }
