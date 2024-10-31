<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProtectedController extends Controller
{

    /*
    function secretMessage(Request $request){
        $user = $request->user();
        // $message = "This is a secret message for {$user->id}";
        $message = "This is a secret message for {$user->name}";
        return view('secret', compact('message'));
    }

    */

    function secretMessage(){
        $user = Auth::user();
        // $message = "This is a secret message for {$user->id}";
        // $message = "This is a secret message for {$user->name}";
        $message = "This is a secret message for {$user->email}";
        return view('secret', compact('message'));
    }

    function openMessage(){
       
        $message = "This is a open message.";
        if(Auth::check()){
            $message .= " You are logged in as". Auth::user()->email;
        }
        return view('secret', compact('message'));
    }

}
