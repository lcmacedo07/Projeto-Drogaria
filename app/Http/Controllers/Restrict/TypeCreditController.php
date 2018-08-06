<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\CreditsTypes;
use Gate;
use Alert;

class TypeCreditController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.credits_types';
    protected $redirectIndex = '/restrict/credits_types';

    public function __construct(CreditsTypes $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "credits_types";
        $this->titulo = "TIPOS DE CRÉDITOS(ENTRADAS)";
        $this->gate = 'CREDITS-TYPES';
    }
    
    
    
}
