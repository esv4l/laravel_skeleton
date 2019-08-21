<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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

		if ($user->role->role_name != 'admin') {
			return response()->view('errors.403');
		}

        return $next($request);
    }

	public function forbiddenResponse()
	{
	    return response()->view('errors.403');
	}

}
