<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(){ 
        $email = request('email');
        $password = request('password');
    
        $user = \App\Models\User::where('email', $email)->first();
    
        if(!$user) {
            return response()->json(['error' => 'Email not registered'], 404);
        }

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyLaravelApp')->accessToken; 
            $success['userId'] = $user->id;
            return response()->json(['success' => $success]); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function register(Request $request) 
{ 
    $validator = Validator::make($request->all(), [ 
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6', 
        'password_confirmation' => 'required|same:password', 
    ]);

    if ($validator->fails()) { 
        return response()->json(['error' => $validator->errors()], 422);            
    }

    $input = $request->all(); 
    $input['password'] = bcrypt($input['password']); 
    $user = User::create($input); 
    
    $accessToken = $user->createToken('MyLaravelApp')->accessToken;

    return response()->json([
        'success' => true,
        'message' => 'User registered successfully',
        'user' => $user,
        'access_token' => $accessToken
    ], 201); 
}
}
