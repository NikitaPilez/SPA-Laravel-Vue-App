<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){
        return view('chat');
    }

    public function sendMessage(Request $request){
        if($request->has('message')){
            event(new \App\Events\NewMessage($request->input('message')));
        }
    }
}
