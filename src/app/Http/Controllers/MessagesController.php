<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, array(
            'name' => 'required',
            'email'=> 'required'
        ));
        
        // Create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        
        // Save message
        $message->save();

        // Redirect
        return redirect('/');
    }
}
