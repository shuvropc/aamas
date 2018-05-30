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

      $contact=new Contact();

      $contact->name = $name;
      $contact->email = $email;
      $contact->title = $title;
      $contact->comment = $comment;

      $contact->save();

      return "done";

    }

}
