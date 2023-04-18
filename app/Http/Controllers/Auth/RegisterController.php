<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        $password = $request->password;
        if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password)) {
            $password_error = "Password must be at least 8 characters long and contain at least 1 uppercase letter and 1 special character";
            return redirect()->back()->with('error', $password_error);
        }
        if($request->password != $request->password_confirmation){
            //return back with session error
            return redirect()->back()->with('error', 'Passwords do not match');
        }        
       
        if($request->password == $request->password_confirmation){
            $user = new User();
            //generate student ID of 7 digits and check if it exists in the database
            $studentID = rand(1000000, 9999999);
            if(User::where('student_id', $studentID)->exists()){
                $studentID = rand(1000000, 9999999);
            }
            $user->student_id = $studentID;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            // dd("here");
            $user->save();
            //to login page with session success
            return redirect()->route('login')->with('success', 'Registration successful. Please login');
        }
    }
}
