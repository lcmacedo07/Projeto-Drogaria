<?php

namespace App\Http\Controllers\Restrict;

use App\Http\Controllers\Restrict\StandardController;
use Illuminate\Http\Request;
use App\User;
use App\Models\Restrito\Citys;
use App\Models\Restrito\Conveyors;
use App\Models\Restrito\Products;
use App\Models\Restrito\Providers;
use App\Models\Restrito\Categorys;
use App\Models\Restrito\Purchases;
use App\Models\Restrito\Sales;
use App\Models\Restrito\Contact;
use Gate;

class RestritoController extends StandardController {

    protected $model;
    protected $citys;
    protected $conveyors;
    protected $products;
    protected $providers;
    protected $categorys;
    protected $purchases;
    protected $sales;
    protected $contacts;
    protected $nomeView = 'restrict._home_';
    protected $gate;
    protected $page;
    
    public function __construct(Products $model,Request $request,User $user, Citys $citys,
            Conveyors $conveyors,Providers $providers, Categorys $categorys,
            Purchases $purchases,Sales $sales, Contact $contacts) {
        
        $this->model = $model;
        $this->request = $request;
        $this->titulo = "DASHBOARD";
        $this->gate = 'DASHBOARD';

    }
    
    public function index() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->all();
        
        $citys = Citys::all()->count();
        $conveyors = Conveyors::all()->count();
        $providers = Providers::all()->count();
        $categorys = Categorys::all()->count();
        $user = User::all()->count();
        $purchases = Purchases::all()->count();
        $sales = Sales::all()->count();
        $contacts = Contact::all()->count();
        
        return view("{$this->nomeView}.index", compact('data','citys','conveyors',
                                                        'providers','categorys','user',
                                                        'purchases','sales','contacts'))
                                                         ->with('page', $this->page)
                                                         ->with('titulo', $this->titulo);
    }
    

}
