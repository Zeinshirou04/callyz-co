<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public static function index() {
        return view('pages/gallery', [
            "title" => "Gallery",
            "icon" => "callyz.png",
            "company-name" => "Callyz",
            "footer_class" => "bg-gradient-to-bl from-gray-600 via-slate-800 to-black",
            "clothing" => Gallery::getAll()
        ]);
    }
}
