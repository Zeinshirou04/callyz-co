<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'subject' => 'required|max:100',
            'message' => 'required'
        ]);

        Message::create($validatedData);
        // return request()->all();
        // return redirect(url('/'));
    }
}
