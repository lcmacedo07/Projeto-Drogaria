<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Products;
use App\Models\Restrito\Categorys;
use App\Models\Restrito\Providers;
use Gate;
use Alert;

class ProductController extends StandardController {

    protected $model;
    protected $categorys;
    protected $providers;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.products';
    protected $redirectIndex = '/restrict/products';

    public function __construct(Products $model, Categorys $categorys, Providers $providers, Request $request) {
        $this->model = $model;
        $this->categorys = $categorys;
        $this->providers = $providers;
        $this->request = $request;
        $this->page = "products";
        $this->titulo = "PRODUTOS";
        $this->gate = 'PRODUCTS';
    }
    
    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $categorys = $this->categorys->all();
        $providers = $this->providers->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('categorys', 'providers'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $categorys = $this->categorys->all();
        $providers = $this->providers->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','categorys','providers'))
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
