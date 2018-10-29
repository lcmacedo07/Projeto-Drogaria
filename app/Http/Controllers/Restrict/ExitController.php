<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Exits;
use App\Models\Restrito\Stores;
use App\Models\Restrito\Conveyors;
use Gate;
use Alert;

class ExitController extends StandardController {

    protected $model;
    protected $stores;
    protected $conveyors;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.exits';
    protected $redirectIndex = '/restrict/exits';

    public function __construct(Exits $model, Stores $stores, Conveyors $conveyors, Request $request) {
        $this->model = $model;
        $this->stores = $stores;
        $this->conveyors = $conveyors;
        $this->request = $request;
        $this->page = "exits";
        $this->titulo = "SAIDAS";
        $this->gate = 'CONVEYORS';
    }
    
    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $stores = $this->stores->all();
        $conveyors = $this->conveyors->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('stores', 'conveyors'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $stores = $this->stores->all();
        $conveyors = $this->conveyors->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','stores','conveyors'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
}
