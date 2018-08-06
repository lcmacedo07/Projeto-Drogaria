<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\ItemExits;
use App\Models\Restrito\Exits;
use App\Models\Restrito\Products;
use Gate;
use Alert;

class ItemExitController extends StandardController {

    protected $model;
    protected $exits;
    protected $products;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.item_exits';
    protected $redirectIndex = '/restrict/item_exits';

    public function __construct(ItemExits $model, Exits $exits, Products $products, Request $request) {
        $this->model = $model;
        $this->exits = $exits;
        $this->products = $products;
        $this->request = $request;
        $this->page = "item_exits";
        $this->titulo = "ITEM DAS SAIDAS";
        $this->gate = 'CATEGORYS';
    }
    
    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $exits = $this->exits->all();
        $products = $this->products->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('exits', 'products'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $exits = $this->exits->all();
        $products = $this->products->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','exits','products'))
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
    
    public function store() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $dadosForm = $this->request->all();
        $validator = validator($dadosForm, $this->model->rules);
        /*
          if ($validator->fails()) {
          $messages = $validator->messages();
          return $messages;
          }
         */
        if ($validator->fails()) {
            alert()->error('Houve um erro no registro. Corrija e tente novamente!', 'Falha na inserção!')->autoclose(4500);
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput()
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        } else {
            $insert = $this->model->create($dadosForm);
        }
        if ($insert) {
            alert()->success('', 'Registro inserido!');
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        }
    }
    
}
