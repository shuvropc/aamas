<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function storeContact(Request $request){
       $this->validate($request,[
           'name'       =>'required',
           'email'      =>'required|email',
           'title'      =>'required',
           'comment'    =>'required'
       ]);
       $name = $request->input('name');
       $email = $request->input('email');
       $title = $request->input('title');
       $comment = $request->input('comment');

       Contact::create([
           'name'   =>$name,
           'email'  =>$email,
           'title'  =>$title,
           'comment'=>$comment
       ]);

      return "done";

    }

}
