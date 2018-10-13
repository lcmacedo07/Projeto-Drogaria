<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

//    protected $categorias;
//    protected $subcategorias;
//    protected $users;
//    protected $posts;
//    protected $anuncios;
//    protected $gate;
//
//    public function __construct(Categorias $categorias, User $users, Posts $posts, SubCategorias $subcategorias, Anuncios $anuncios) {
//        $this->categorias = $categorias;
//        $this->subcategorias = $subcategorias;
//        $this->users = $users;
//        $this->posts = $posts;
//        $this->anuncios = $anuncios;
//        $this->gate = 'SECRETARIA';
//    }

    public function index() {
        return view('web._home.index');
    }
    public function about() {
        return view('web.about.index');
    }
    public function contact() {
        return view('web.contact.index');
    }


}
