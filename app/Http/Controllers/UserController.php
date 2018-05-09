<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this ->validate($request,[
            'email' => 'email|required|unique:users',
            'passwords' => 'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();

        return redirect() -> route('product.index');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this -> validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'

        ]);

        if(Auth::attempt(['email' => $request -> input('email'), 'password' => $request->input('password')])){

            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }
}