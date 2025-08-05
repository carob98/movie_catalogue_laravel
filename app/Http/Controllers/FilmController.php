<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
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
            'director' => $request->director,
            'trailer_url' => $request->trailer_url,
            'cover' => $path_image,
        ]);

        return redirect()->route('films.index')->with('success');
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    public function update(Film $film, UpdateFilmRequest $request)
    {

        $cover = $film->cover;
        if ($request->hasFile('cover')) {
            $file_name = $request->file('cover')->getClientOriginalName();
            $cover = $request->file('cover')->storeAs('covers', $file_name, 'public');
        }

        return redirect()->route('films.index')->with('success', 'Il film é stato modificato!');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'Il film é stato eliminato!');
    }
}
