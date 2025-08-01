<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
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

    public function store(StoreFilmRequest $request)
    {
        $path_image = '';

        if ($request->hasFile('cover')) {
            $file_name = $request->file('cover')->getClientOriginalName();
            $path_image = $request->file('cover')->storeAs('covers', $file_name, 'public');
        }

        Film::create([
            'title' => $request->title,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'cover' => $path_image,
        ]);

        return redirect()->route('films.index')->with('success');
    }
}
