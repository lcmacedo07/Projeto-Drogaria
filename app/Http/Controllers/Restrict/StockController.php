<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Stocks;
use Gate;
use Alert;
use App;

class StockController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.stocks';
    protected $redirectIndex = '/restrict/stocks';

    public function __construct(Stocks $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "stocks";
        $this->titulo = "ESTOQUES";
        $this->gate = 'STOCKS';
    }

}
