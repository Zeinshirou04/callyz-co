<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public static function index() {
        return view('pages/contact', [
            "title" => "Home",
            "icon" => "callyz.png",
            "company-name" => "Callyz",
            "footer_class" => "bg-gradient-to-br to-gray-600 via-slate-800 from-black"
        ]);
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'subject' => 'required|max:100',
            'message' => 'required'
        ]);

        Message::create($validatedData);
        // dd($validatedData);
        return redirect(url('/'));
    }
}
