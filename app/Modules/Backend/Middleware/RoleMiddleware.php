<?php 

	namespace App\Modules\Backend\Middleware;

	/**
	 * This file is part of Entrust,
	 * a role & permission management solution for Laravel.
	 *
	 * @license MIT
	 * @package Zizaco\Entrust
	 */

	use Closure;

	use Auth;

	use Illuminate\Contracts\Auth\Guard;

	class RoleMiddleware
	{
		const DELIMITER = '|';

		protected $auth;

		/**
		 * Creates a new instance of the middleware.
		 *
		 * @param Guard $auth
		 */
		public function __construct(Guard $auth)
		{
			$this->auth = $auth;
		}

		/**
		 * Handle an incoming request.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @param  Closure $next
		 * @param  $roles
		 * @return mixed
		 */
		public function handle($request, Closure $next, $roles)
		{
			if (!is_array($roles)) {
				$roles = explode(self::DELIMITER, $roles);
			}

			if ($this->auth->guest() || !$request->user()->hasRole($roles)) {
				return redirect()->route('auth.login.get');
			}

			return $next($request);
		}
	}
