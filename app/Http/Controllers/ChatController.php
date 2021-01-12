<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Events\MessageSent;
use Carbon\Carbon;

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
        $message = Message::with('user')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
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
