<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;
use Tymon\JWTAuth\JWTAuth;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    protected $jwt;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(JWTAuth $jwt, Auth $auth)
    {
        $this->jwt = $jwt;
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if ($this->auth->guard($guard)->guest()) {
            //return response($guard, 401);
            try {

              $refreshed = $this->jwt->refresh($this->jwt->getToken());
              $user = $this->jwt->setToken($refreshed)->toUser();
              header('Authorization: Bearer ' . $refreshed);

            } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                return response()->json([
                  'success' => FALSE,
                  'message' => 'token_expired'
                ], 401);

            } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                return response()->json([
                  'success' => FALSE,
                  'message'=>'token_invalid'
                ], 401);

            } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

                return response()->json([
                  'success' => FALSE,
                  'message' => $e->getMessage()
                ], 401);

            }
        }
        
        return $next($request);
    }
}
