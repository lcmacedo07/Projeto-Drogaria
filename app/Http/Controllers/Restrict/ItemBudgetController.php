<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\ItensBudgets;
use App\Models\Restrito\Budgets;
use App\Models\Restrito\Services;
use Gate;
use Alert;

class ItemBudgetController extends StandardController {

    protected $model;
    protected $budgets;
    protected $services;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.item_budgets';
    protected $redirectIndex = '/restrict/item_budgets';

    public function __construct(ItensBudgets $model, Budgets $budgets, Services $services, Request $request) {
        $this->model = $model;
        $this->budgets = $budgets;
        $this->services = $services;
        $this->request = $request;
        $this->page = "item_budgets";
        $this->titulo = "ITENS DO ORCAMENTOS";
        $this->gate = 'BUDGETS';
    }
    
     public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $budgets = $this->budgets->all();
        $services = $this->services->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('budgets','services'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $budgets = $this->$budgets->all();
        $services = $this->$services->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','budgets','services'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
}


