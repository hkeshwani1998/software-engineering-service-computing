<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:1',
        ]);
        
        //Check if user exists
        $user = User::where('email', $request->email)->first();
        if($user){
            //Check if password matches
            if(Hash::check($request->password, $user->password)){
                //Login user
                Auth::login($user);
                return redirect()->route('dashboard');
            }else{
                return redirect()->back()->with('error', 'Invalid login details');
            }
        }else{
            return redirect()->back()->with('error', 'Invalid login details');
        }
        return redirect()->back()->with('error', 'Invalid login details');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
