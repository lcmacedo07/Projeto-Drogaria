<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

class FotoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('restrict._home.index');
    }

}
