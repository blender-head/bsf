<?php

    namespace App\Modules\Backend\Middleware;

    use Closure;

    use Auth;

    use App\Library\Bases\BaseModuleRoute;

    class AuthAdminMiddleware
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)
        {
            $user = Auth::user();
            
            if($user)
            {
                if(isset($user->roleName->name))
                {
                    if(!$user->roleName->name == 'super_admin' && !$user->roleName->name == 'editor')
                    {
                        return redirect()->route('admin.login.get');
                    }
                }
                else
                {
                    AuthManager::logout();
                    return redirect()->route('admin.login.get');
                }
            }
            else
            {
                return redirect()->route('auth.login');
            }

            return $next($request);
        }
    }
