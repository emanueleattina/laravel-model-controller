<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller {
    public function index() {
        $title_page = 'Movies';

        // il metodo statico all() prende tutte le righe della tabella movies
        // e li trasforma in oggetti movie collezionati in un array
        // quindi movies sarà un array di oggetti movie
        $movies = Movie::all();

        return view('movies', compact('movies', 'title_page'));
    }
}
