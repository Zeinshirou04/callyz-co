<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static $home;

    public static function index() {
        return view('pages/home', [
            "title" => "Home",
            "icon" => "callyz.png",
            "company-name" => "Callyz",
            "footer_class" => "bg-gradient-to-br to-gray-600 via-slate-800 from-black",
            "clothing" => Gallery::getSome()
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
