<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Categorys;
use Gate;
use Alert;

class CategoryController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.categorys';
    protected $redirectIndex = '/restrict/categorys';   

    public function __construct(Categorys $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "categorys";
        $this->titulo = "CATEGORIAS";
        $this->gate = 'CATEGORYS';
    }
   
}
