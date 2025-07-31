<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();

        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store()
    {
        //Per il momento ho solo la rotta, devo aggiungere la richesta per poter salvare
        return redirect()->route('films.index')->with('success');
    }
}
