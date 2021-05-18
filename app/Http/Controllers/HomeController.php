<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// una classe chiamata HomeController che estende Controller
class HomeController extends Controller {

    // e che ha all'interno un metodo collegato a una rotta
    public function index() {

        $title_page = 'Home';
        // che fa il ritorno di una view
        return view('home', compact('title_page'));
        // ^ utilizzerò compact(), la versione compatta di with che si passa come parametro
    }
}
