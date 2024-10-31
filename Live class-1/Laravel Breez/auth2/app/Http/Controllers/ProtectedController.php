<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtectedController extends Controller
{
    function secretMessage(Request $request){
		
		//Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        $user = $request->user();
        $message = "This is a secret message for {$user->name}";
        return view('secret', compact('message'));
    }
}
