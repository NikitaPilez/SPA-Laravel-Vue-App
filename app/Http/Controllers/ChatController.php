<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function privateChat()
    {
        $users = User::select('email','id')->where('id','!=',Auth::id())->get();
        return view('private-chat',[
            'users' => $users,
            'user'  => Auth::user()
        ]);
    }

    public function sendMessage(Request $request)
    {
        if($request->has('message')){
            event(new \App\Events\NewMessage($request->input('message')));
        }
    }

    public function sendPrivateMessage()
    {

    }
}
