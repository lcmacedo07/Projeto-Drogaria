<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Sales;
use Gate;
use Alert;
use App;

class SaleController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.sales';
    protected $redirectIndex = '/restrict/sales';

    public function __construct(Sales $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "sales";
        $this->titulo = "VENDAS";
        $this->gate = 'SALES';
    }

    public function pdf() {
        $data = $this->model->all();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view("{$this->nomeView}.pdf", compact('data')));
        return $pdf->stream();
    }

}
