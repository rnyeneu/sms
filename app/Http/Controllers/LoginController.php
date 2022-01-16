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

    function check(Request $request){
        
        $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:15'
        ]);

        $user_info = Admin::where('email', '=', $request->email)->first();

        if(!$user_info){
            return back()->with('fail', 'We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $user_info->password)){
              $request->session()->put('loggedUser',$user_info->id);
              return redirect ('/');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    function default(){
        $data = ['LoggedUserInfo' =>Admin::where('id', '=', session('loggedUser'))->firtst()];
        return view ('/', $data);
    }
}
