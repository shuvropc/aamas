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
       }else {

           if ($pass != $conPass) {
               $message = "password and confirm password does not match";
               return view('user.registration',['message'=>$message]);
           } else {


               $userAccount = new User();

               $userAccount->name = $request->input('userName');
               $userAccount->email = $request->input('userEmail');
               $userAccount->password = Hash::make($pass);
               $userAccount->save();

               return redirect()->route('userLogin');
           }
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

        if($userDb==null){
            $message="Email doesn't exist";
            return view('user.login',['message'=>$message]);
        }else {

            if(Hash::check($password, $userDb->password)){

                session(['user' => $userDb]);
//                return $request->session()->get('user');
            return redirect()->route('homepage');
            } else {
                $message = "Email or Password is wrong";
                return view('user.login', ['message' => $message]);

            }
        }

    }

    public function information(){
        return view('user.information');
    }

    public function setInformation(Request $request){

        $id = $request->session()->get('user.id');
        $userAccount =User::where('id','=', $id)->first();

        $userAccount->address = $request->input('userAddress');
        $userAccount->city = $request->input('userCity');
        $userAccount->zipcode = $request->input('userZipCode');
        $userAccount->contact_number = $request->input('userPhone');
        $userAccount->shipping_address = $request->input('userShippingAddress');

        $userAccount->save();


        return redirect()->route('admin');
    }

    public function edit(Request $request){
       $user= User::where('id','=', $request->session()->get('user.id'))->first();

        return view('user.update',['user' => $user]);
    }

    public function update(Request $request){
        $user= User::where('id','=', $request->session()->get('user.id'))->first();
        if($user){

            $user->name = $request->input('updateUserName');
            $user->address = $request->input('updateUserAddress');
            $user->city = $request->input('updateUserCity');
            $user->zipcode = $request->input('updateUserZipcode');
            $user->contact_number = $request->input('updateUserPhone');
            $user->shipping_address = $request->input('updateUserShippingAddress');

            $user->save();
        }
    }

    public function changePassword(){
        return view('user.passwordChange');
    }
    public function updatePassword(Request $request){

        $this->validate($request,[
           'oldPass'    =>'required',
            'newPassword'   =>'required',
            'confirmPassword'=>'required|same:newPassword'

        ]);
        $oldPass = $request->input('oldPass');

        $user=User::where('id', '=', $request->session()->get('user.id'))->first();

        if(Hash::check($oldPass, $user->password)){
            $newPass = $request->input('newPassword');
            $user->password=Hash::make($newPass);
            $user->save();
        }else{
            $error="Old Password is not correct";
            return view('user.passwordChange',['error'=> $error]);
        }

    }

    public function profile(Request $request){
        $profile=User::find($request->session()->get('user.id'));
        if($profile){

            return view('user/profile',['profile'=>$profile]);
        }else{
            return "can not found";
        }
    }

    public function logOut(){
        session()->forget('user');
        return "Logged out ";
    }


}
