<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function storeContact(Request $request){
        return view('contact');
    }

}
