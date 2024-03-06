<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }

    public function greet(request $request){
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
       
        return view('welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}