<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Budgets;
use App\User;
use Gate;
use Alert;
use App;

class BudgetController extends StandardController {

    protected $model;
    protected $users;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.budgets';
    protected $redirectIndex = '/restrict/budgets';

    public function __construct(Budgets $model, User $users, Request $request) {
        $this->model = $model;
        $this->users = $users;
        $this->request = $request;
        $this->page = "budgets";
        $this->titulo = "ORÇAMENTO";
        $this->gate = 'BUDGETS';
    }

    public function index() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->leftJoin('users', 'users.id', 'budgets.user_id')->get();
        return view("{$this->nomeView}.index", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $users = $this->users->where('type','client')->get();
        return view("{$this->nomeView}.cadastrar-editar", compact('users'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $users = $this->users->where('type', 'client')->get();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data', 'users'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function show($id) {
        /* exibindo os registros do orçamento $id e não desta model */
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->find($id);
        return view("{$this->nomeView}.show", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
   
    public function pdf() {
        $data = $this->model->leftJoin('users', 'users.id', 'budgets.user_id')->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view("{$this->nomeView}.pdf", compact('data')));
        return $pdf->stream();
        
    }     

}



