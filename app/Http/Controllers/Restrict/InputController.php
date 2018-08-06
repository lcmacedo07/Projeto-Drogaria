<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Inputs;
use App\Models\Restrito\Conveyors;
use Gate;
use Alert;

class InputController extends StandardController {

    protected $model;
    protected $conveyors;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.inputs';
    protected $redirectIndex = '/restrict/inputs';

    public function __construct(Inputs $model, Conveyors $conveyors, Request $request) {
        $this->model = $model;
        $this->conveyors = $conveyors;
        $this->request = $request;
        $this->page = "inputs";
        $this->titulo = "ENTRADAS";
        $this->gate = 'CONVEYORS';
    }
    
    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $conveyors = $this->conveyors->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('conveyors'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $conveyors = $this->conveyors->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','conveyors'))
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
    
    
}
