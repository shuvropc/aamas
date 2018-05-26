<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function registration(){

        return view('user.registration');
    }

    public function createAccount(Request $request)
    {

        $pass = $request->input('userPassword');
        $conPass= $request->input('conUserPass');


       if(User::where('email', '=', $request->input('userEmail'))->first()){
           $message="Email already exists!";
           return view('user.registration',['message'=>$message]);
       }

        if($pass != $conPass){
            $message="password and confirm password does not match";
            return view('user.registration');
        }
        else {


            $userAccount = new User();


            $userAccount->name = $request->input('userName');
            $userAccount->email = $request->input('userEmail');
            $userAccount->password = Crypt::encryptString($pass);
            $userAccount->save();

            return redirect()->route('admin');
        }
    }

    public function userLogin(){
        $message="";
        return view('user.login',['message'=>$message]);
    }
    public function login(Request $request){
        $email= $request->input('email');
        $password=$request->input('password');




        $userDb = User::where('email', '=', $email)->first();

        $DbPassword =Crypt::decryptString($userDb->password);


        if($email==$userDb->email && $password==$DbPassword){

            session(['user' => $userDb]);

            return "Logged in";

//            return redirect()->route('admin');
        }else{
            $message="Email or Password is wrong";
            return view('user.login',['message'=>$message]);

        }

    }

    public function logOut(){
        session()->flush();
    }
}
