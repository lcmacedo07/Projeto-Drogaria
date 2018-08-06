<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Paymants;
use App\Models\Restrito\PaymantsTypes;
use Gate;
use Alert;
use App;

class PaymantController extends StandardController {

    protected $model;
    protected $paymantsTypes;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.paymants';
    protected $redirectIndex = '/restrict/paymants';

    public function __construct(Paymants $model, PaymantsTypes $paymantsTypes, Request $request) {
        $this->model = $model;
        $this->paymantsTypes = $paymantsTypes;
        $this->request = $request;
        $this->page = "paymants";
        $this->titulo = "DÉBITOS(SAÍDAS)";
        $this->gate = 'PAYMANTS';
    }

//    paymantsTypes


    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $paymantsTypes = $this->paymantsTypes->all();

        return view("{$this->nomeView}.cadastrar-editar", compact('paymantsTypes'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $paymantsTypes = $this->paymantsTypes->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','paymantsTypes'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
     public function pdf() {
        $data = $this->model->all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view("{$this->nomeView}.pdf", compact('data')));
        return $pdf->stream();
    }

}


