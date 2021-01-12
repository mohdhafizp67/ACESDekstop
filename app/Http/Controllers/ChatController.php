<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat.index');
    }

    public function fetchMessages()
    {
        $message = Message::with('user')->get();
        return $message;
    }

    public function sendMessages(Request $request)
    {
        if($request->message){
          $messages = auth()->user()->messages()->create([
            'message' => $request->message
          ]);

          broadcast(new MessageSent($messages->load('user')))->toOthers();

          return ['status' => 'success'];
        }
        else {
          return ['status' => 'failed'];
        }

    }
}
