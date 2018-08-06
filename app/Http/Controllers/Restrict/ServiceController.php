<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Services;

class ServiceController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.services';
    protected $redirectIndex = '/restrict/services';

    public function __construct(Services $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "services";
        $this->titulo = "SERVIÇOS PRESTADOS";
        $this->gate = 'SERVICES';
    }
    
    
    
}
