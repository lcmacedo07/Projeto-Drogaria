<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Citys;
use Gate;
use Alert;

class CityController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.citys';
    protected $redirectIndex = '/restrict/citys';

    public function __construct(Citys $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "citys";
        $this->titulo = "CIDADES";
        $this->gate = 'CITYS';
    }
    
}
