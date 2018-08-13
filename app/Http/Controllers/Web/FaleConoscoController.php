<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('restrict._home.index');
    }

}
