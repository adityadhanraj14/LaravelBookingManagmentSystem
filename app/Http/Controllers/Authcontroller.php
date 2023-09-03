<?php

namespace App\Http\Controllers;
use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Import the Hash facade


class Authcontroller extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function authenticate(Request $request){   
        $request->validate([
            'email'=>'email|required',
            'password'=>'required',
        ]);
        if(Auth::attempt(array('email'=>$request->get('email'),'password'=>$request->get('password')))){
            if(Auth::user()->user_type == 1){
                return redirect()->route('dashboard.admin');
            }
            else if(Auth::user()->user_type == 2){
                return redirect()->route('dashboard.user');
            }
        }
        else{
            return redirect()->route('login')->with('error','Email adress or Password is Wrong');
        }


    }

    public function signup(){
        return view('auth.register');

    }

    public function createuser(Request $request){
        
        $request->validate([
            'name'=>'required|string',
            'email'=>'email|required',
            'phone_no'=>'required',
            'password'=>'required',
            'confirmpassword'=>'required|same:password'
        ]);
        $user=new User ([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone_no'),
            'password'=>Hash::make($request->get('password')),
            'user_type'=>2
        ]);
        $user->save();
        return redirect()->route('login');

    }

    public function logout (){
        Auth::logout();
        return redirect()->route('login');
    }
} 
