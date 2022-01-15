<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login(){

        return view('auth.login');
    }

    function register(){

        return view ('auth.register');
    }

    function save (Request $request){

        //Validate the request
        $request->validate([

            'full_name'=>'required',
            'username'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|min:5|max:15'


        ]);

        //insert data into the database
        $admin = new Admin;
        $admin->full_name = $request->full_name;
        $admin->username = $request->username;
        $admin->phone = $request->phone;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){

            return back()->with('success','New user has been successfully registered');

        }else{

            return back()->with('failed','Something went wrong try again later!');

        }


    }
}
