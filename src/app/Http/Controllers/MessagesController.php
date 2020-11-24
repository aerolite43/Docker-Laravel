<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, array(
            'name' => 'required',
            'email'=> 'required|email'
        ));
        
        // Create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        
        // Save message
        $message->save();

        // Redirect with Flash message.
        return redirect('/')->with('success', 'Message sent!');
    }

    public function getMessage() {
        $messages = Message::all();
        
        return view('messages')->with('messages', $messages);
    }
}
