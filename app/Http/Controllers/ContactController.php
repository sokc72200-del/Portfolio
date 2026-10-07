<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email'=> 'required|email|max:100',
            'body' => 'required|string|max:200',
        ]);
        Message::create($data);

        return back()->with('Success','Thank! you message has been sent. ');
    }
}
