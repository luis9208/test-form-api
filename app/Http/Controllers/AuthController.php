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
        $credentials = $request->only('email', 'password');
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

    public function register(Request $request)
    {
        $msg = ['message' => ''];
        $status = 200;
        $response = null;
        try {
            $pwd = Hash::make($request->password);
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => $pwd
            ]);
            $msg['message'] = 'El usuario fue creado con exito';
            $response = response()->json($msg, $status);
        } catch (\Exception $ex) {
            $msg['message'] = 'El usuario ya existe';
            $status = 500;
            $response = response()->json($msg, $status);
        }

        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'login'], 200);
    }
}
