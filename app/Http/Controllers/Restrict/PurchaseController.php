<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Purchases;
use App\Models\Restrito\Providers;
use Gate;
use Alert;
use App;

class PurchaseController extends StandardController {

    protected $model;
    protected $providers;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.purchases';
    protected $redirectIndex = '/restrict/purchases';

    public function __construct(Purchases $model, Providers $providers, Request $request) {
        $this->model = $model;
        $this->providers = $providers;
        $this->request = $request;
        $this->page = "purchases";
        $this->titulo = "COMPRAS";
        $this->gate = 'PURCHASES';
    }
   
    
    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $providers = $this->providers->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('providers'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $providers = $this->providers->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','providers'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
     public function deletar($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $item = $this->model->find($id);
        $deleta = $item->delete();

        if ($deleta) {
            return '1';
        } else {
            alert()->error('Pressione F5 e verifique se o arquivo continua na lista. Caso o erro persista, entre em contato com a Administração.', 'Erro na exclusÃ£o!')->autoclose(4500);
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        }
        
     }
    public function pdf() {
        $data = $this->model->all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view("{$this->nomeView}.pdf", compact('data')));
        return $pdf->stream();
    }

}

