<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\PaymantsTypes;

class TypesPaymantController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.paymants_types';
    protected $redirectIndex = '/restrict/paymants_types';

    public function __construct(PaymantsTypes $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "paymants_types";
        $this->titulo = "TIPOS DE DÉBITOS(SAÍDAS)";
        $this->gate = 'PAYMANTS-TYPES';
    }
    
    
    
}
