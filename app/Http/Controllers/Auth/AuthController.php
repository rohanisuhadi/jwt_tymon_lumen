<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\JWT;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @var \Tymon\JWTAuth\JWTAuth
     */
    protected $jwt;

    protected $jwtauth;

    public function __construct(JWTAuth $jwt,JWT $jwtauth)
    {
        $this->jwt = $jwt;
        $this->jwtauth = $jwtauth;
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);

        try {

            if (! $token = $this->jwt->attempt($request->only('email', 'password'))) {
                return response()->json(['user_not_found'], 404);
            }

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

        return response()->json([
            'success' => true,
            'access_token' => $token,
            'token_type' => 'Authorization: Bearer ',
            'user' => $this->jwt->user(),
            'expires_in' => $this->jwt->factory()->getTTL() * 1
        ], 200);

    }

    //show data auth
    public function me()
    {
        return response()->json($this->jwt->user());
    }

    public function logout()
    {
      try {

          $new_token = $this->jwt->refresh();

      } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

          return response()->json(['token_expired'], 500);

      } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

          return response()->json(['token_invalid'], 500);

      } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

          return response()->json(['token_absent' => $e->getMessage()], 500);

      }

       return response()->json($new_token);

    }

    public function refresh()
    {
        try
          {
              $refreshed = $this->jwt->refresh($this->jwt->getToken());
              $user = $this->jwt->setToken($refreshed)->toUser();
              header('Authorization: Bearer ' . $refreshed);
          }
          catch (JWTException $e)
          {
               return response()->json([
                 'success' => FALSE,
                 'message' => $e->getMessage()
               ], 401);
          }
    }



}
