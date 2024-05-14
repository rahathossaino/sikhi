<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->back();
        }
        return view('login');
    }
    public function process(Request $request){
        try{
            $validate=Validator::make($request->all(),[
                'email'=>['required','email'],
                'password'=>['required']
            ]);
            if($validate->passes()){
                if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                    if(session('redirect_url')){
                        return redirect(session('redirect_url'));
                    }
                    return redirect()->route('dashboard');
                }
                return redirect()->back()->with('error',' Either Email or Password is wrong');
            }
            return redirect()->back()->withErrors($validate);
        }
        catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route("login");
        }
    }
}
