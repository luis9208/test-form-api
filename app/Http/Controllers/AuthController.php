<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     /**
     * Permite el inicio de sesion
     *@param Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('user', 'password');
        $msg = '';
        $status = 200;
        try {
            if (!Auth::attempt($credentials)) {
                $msg = 'El usuario no es valido';
                $status = 401;
            }
            /**
             * @var User
             */
            $user = Auth::user();

            $token = $user->createToken('TokenPersonal');

            $msg = [
                'token' => $token->accessToken,
                'type' => 'Bearer Token',
                'user' => $user->id,
            ];
        } catch (\Throwable $th) {
            $msg = 'El usuario no existe';
            $status = 500;
        }

        return response()->json(['message' => $msg], $status);

    }

    public function register(Request $request) {
        
        try {
        $pwd = Hash::make($request->password);
        $user = User::create([$request->email,
            $request->name,
            $pwd      
        ]);
        


        } catch (\Throwable $th) {
            //throw $th;
        }


    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'login'], 200);
    }
}
