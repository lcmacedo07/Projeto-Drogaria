<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Stores;
use App\Models\Restrito\Citys;
use Gate;
use Alert;

class StoreController extends StandardController {

    protected $model;
    protected $citys;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.stores';
    protected $redirectIndex = '/restrict/stores';

    public function __construct(Stores $model, Citys $citys, Request $request) {
        $this->model = $model;
        $this->citys = $citys;
        $this->request = $request;
        $this->page = "stores";
        $this->titulo = "CONFIGURAÇÃO DA LOJA";
        $this->gate = 'STORE';
    }

    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }

        $citys = $this->citys->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('citys'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }

        $citys = $this->citys->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data', 'citys'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function show($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->find($id);
        return view("{$this->nomeView}.show", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
}
