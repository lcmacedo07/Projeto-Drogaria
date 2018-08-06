<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Credits;
use App\Models\Restrito\CreditsTypes;
use App\Models\Restrito\Budgets;
use Gate;
use Alert;

class CreditController extends StandardController {

    protected $model;
    protected $creditsTypes;
    protected $budgets;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.credits';
    protected $redirectIndex = '/restrict/credits';

    public function __construct(Credits $model, CreditsTypes $creditsTypes, Budgets $budgets,Request $request) {
        $this->model = $model;
        $this->creditsTypes = $creditsTypes;
        $this->budgets = $budgets;
        $this->request = $request;
        $this->page = "credits";
        $this->titulo = "CONFIGURAÇÕES DO CREDITO(ENTRADAS)";
        $this->gate = 'CREDITS';
    }

    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $creditsTypes = $this->creditsTypes->all();
        $budgets = $this->budgets->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('creditsTypes','budgets'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->find($id);
        $creditsTypes = $this->creditsTypes->all();
        $budgets = $this->budgets->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('data','creditsTypes','budgets'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

}
