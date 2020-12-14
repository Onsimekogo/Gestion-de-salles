<?php

namespace App\Http\Controllers;
use  App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use App\User;

class ApiAuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|max:20',
            'email'=>'email|required',
            'password'=>'required|confirmed'

        ]);
        $validatedData['password']= bcrypt($request->password);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response (['user'=>$user , 'access_token'=> $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData=$request->validate([
            'email'=>'email|required',
            'password'=>'required'

        ]);

        if(!auth()->attempt($loginData)){

            return response (['message'=>'Identifiant de connexion incorrect']);
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response (['user'=>auth()->user(),'access_token'=> $accessToken]);

    }
    public function db_all(Request $request)
    {
        $Users=User::all();
        foreach ($Users as $user) {
            echo $user->email;
        }
    }

}
