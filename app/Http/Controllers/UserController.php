<?php

namespace App\Http\Controllers;
use App\User;
use Crypt;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration(){
        $message="";
        return view('user.registration',['message'=>$message]);
    }

    public function createAccount(Request $request)
    {

        $pass = $request->input('userPassword');
        $conPass= $request->input('conUserPass');

        if($pass != $conPass){
            $message="password and confirm password does not match";
            return view('user.registration', ['message'=>$message]);
        }
        else {


            $userAccount = new User();


            $userAccount->name = $request->input('userName');
            $userAccount->email = $request->input('userEmail');
            $userAccount->password = Hash::make($pass);
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

        $userDb=new User();

        $DbEmail= $userDb->email;
        $DbPassword =$userDb->password;

        var_dump($DbPassword);

        if($email==$DbEmail && (Hash::check($password, $DbPassword))){
            return redirect()->route('admin');
        }else{
            $message="Email or Password is wrong";
            return view('user.login',['message'=>$message]);

        }

    }
}
