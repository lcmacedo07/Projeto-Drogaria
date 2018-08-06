<?php

namespace App\Http\Controllers\Restrict;

use App\Http\Controllers\Restrict\StandardController;
use App\User;
use App\Models\Restrito\Citys;
use App\Models\Restrito\Conveyors;
use App\Models\Restrito\Products;
use App\Models\Restrito\Providers;
use App\Models\Restrito\Categorys;
use App\Models\Restrito\Purchases;
use App\Models\Restrito\Sales;

class RestritoController extends StandardController {

    protected $model;
    protected $citys;
    protected $conveyors;
    protected $products;
    protected $providers;
    protected $categorys;
    protected $purchases;
    protected $sales;
    protected $nomeView = 'restrict._home';
    protected $gate;
    protected $page;

    public function __construct(User $user, Citys $citys, Conveyors $conveyors,
            Products $products, Providers $providers, Categorys $categorys,Purchases $purchases,Sales $sales) {
        $this->model = $user;
        $this->citys = $citys;
        $this->conveyors = $conveyors;
        $this->products = $products;
        $this->providers = $providers;
        $this->categorys = $categorys;
        $this->purchases = $purchases;
        $this->sales = $sales;
        $this->page = 'home';
        $this->titulo = 'e-Jornal';
        $this->middleware('auth');
        $this->gate = '';
    }
    public function index() {
        $citys = $this->citys->all();
        $conveyors = $this->conveyors->all();
        $products = $this->products->all();
        $providers = $this->providers->all();
        $categorys = $this->categorys->all();
        $user = $this->model->all();
        $purchases = $this->purchases->all();
        $sales = $this->sales->all();
        
        $quantidade1 = count($citys);
        $quantidade2 = count($conveyors);
        $quantidade3 = count($products);
        $quantidade4 = count($providers);
        $quantidade5 = count($categorys);
        $quantidade6 = count($user);
        $quantidade7 = count($purchases);
        $quantidade8 = count($sales);
        
        return view("{$this->nomeView}.index")
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo)
                        ->with('citys', $quantidade1)
                        ->with('conveyors', $quantidade2)
                        ->with('products', $quantidade3)
                        ->with('providers', $quantidade4)
                        ->with('categorys', $quantidade5)
                        ->with('user', $quantidade6)
                        ->with('purchases', $quantidade7)
                        ->with('sales', $quantidade8);
    }

}
