<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class HomeController extends Controller
{
    public function home() {

        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }
    public function index($id) {

        $comic = Comic::findOrFail($id);

        return view('pages.index', compact('comic'));
    }

    public function create() {


        return view('pages.create');
    }
    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric'
        ]);

        $comic = Comic::create($data);

        return redirect() -> route('index', $comic -> id);
    }
}
