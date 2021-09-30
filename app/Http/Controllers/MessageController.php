<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function view_contact_page()
    {
    	return view('contact_us');
    }

    public function store_msg(Request $request)
    {
    	Message::create($request->all());
    	return redirect()->back()->with('msg', 'Message Sent Successfully');
    }
}
