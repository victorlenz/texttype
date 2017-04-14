<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function initialize()
    {
        return view('initialization');
    }



    public function postSignIn(Request $request)
    {
        if(Auth::attempt(['email'=>$request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('initial');
        }
        else
            return back();

    }

    public function postSignUp(Request $request)
    {
        //dd("Hello");

        $this->validate($request,[
            'useremail' => 'required|email|unique:users',
            'name' => 'required|min:3|max:50',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->name = $request['username'];
        $user->email =  $request['useremail'];
        $user->password = bcrypt($request['password']);
        $user->gender = $request['gender'];
        $user->location = $request['location'];
        $user->ip = gethostname();
        $user->remember_token = $request['_token'];
        $user->country = $request['country'];
        $user->save();

        Auth::login($user);

        return redirect()->route('initial');


    }
}
