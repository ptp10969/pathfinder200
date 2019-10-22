<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsersController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);
        if (Auth::once($credentials)){
            return Auth::user();
        }
        return response(['email'=> $request->input('email') , 'password' => $request->input('password')]);
    }
}
