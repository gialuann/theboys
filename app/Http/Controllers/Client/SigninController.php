<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function login(){
        return view("client.sign-in.login");
    }
    public function register(){
        return view("client.sign-in.register");
    }
    public function store(Request $request){

    }
}

