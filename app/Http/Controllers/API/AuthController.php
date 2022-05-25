<?php

namespace App\Http\Controllers\API;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\RegisterFormRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public $loginAfterSignUp = true;


public function __construct(UserRepository $userRepository)
{
    $this->userRepository = $userRepository;
}

    public function register(RegisterFormRequest $request)
    {
        try{
            $user = new User;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->name_surname = $request->name_surname;
            $user->phone_number1 = $request->phone_number1;
            $user->password = bcrypt($request->password);
            $user->save();

             if ($this->loginAfterSignUp) {
                      return $this->login($request);
                  }

            return response([
                'success'=> true,
                'data' => $user
            ], 200);

        }catch (\Exception $e) {
            // something went wrong whilst attempting to encode the token
            return response([
                'success'=>false,
                'code' => '100',
                'message' => $e
            ]);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response([
                'success'=>false,
                'error' => 'invalid.credentials',
                'msg' => __('auth.failed')
            ], 400);
        }

        $user = auth()->user();

        return response()->json([
                'success'=> true,
                'token' => $token,
                'id' => $user->id,
                'username'=>$user->username,
                'name'=>$user->name_surname,
                'email'=>$user->email,
                'user' => $user
        ]);
    }

    public function user(Request $request)
    {

        $this->validate($request, [
            'token' => 'required'
        ]);

        $user = JWTAuth::authenticate($request->token);
        return response([
            'success'=> true,
            'data' => $user
        ]);
    }

    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function logout(Request $request) {
        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));
            return response([
                'success' => true,
                'msg' => 'You have successfully logged out.'
            ]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response([
                'success'=>false,
                'msg' => 'Failed to logout, please try again.'
            ]);
        }
    }
    public function refresh()
    {
        return response([
            'success'=> true
        ]);
    }
}
