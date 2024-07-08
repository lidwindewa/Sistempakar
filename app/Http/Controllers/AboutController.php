<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all(); // Mengambil semua data about
        return view('about', ['abouts' => $abouts, 'title' => 'About']);
    }
}
