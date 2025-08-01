<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $films = Film::latest()->take(6)->get();

        return view('pages.homepage', compact('films'));
    }
}
