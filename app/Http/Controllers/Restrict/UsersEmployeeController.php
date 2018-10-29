<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
use App\Http\Controllers\Restrict\StandardController;
use App\User;
use Gate;
use Alert;
use Illuminate\Support\Facades\Crypt;
use Brian2694\Toastr\Facades\Toastr;

class UsersEmployeeController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.users-employees';
    protected $redirectIndex = '/restrict/users-employees';

    public function __construct(User $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "users-employees";
        $this->titulo = "FUNCIONÁRIOS | FARMACÊUTICOS";
        $this->gate = 'EMPLOYEE';
    }

    public function index() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
            $data = $this->model->where('type','employees')->get();
        return view("{$this->nomeView}.index", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

 public function store() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $dadosForm = $this->request->all();
        $employees = ['type' => 'employees'];
        $dadosForm = array_merge($dadosForm, $employees);
        $pass = $dadosForm['password'];
        
        $pass = ['password' => bcrypt($pass)];
        $dadosForm = array_merge($dadosForm, $pass);
        
        
        $validator = validator($dadosForm, $this->model->rules);
       
         
        if ($validator->fails()) {
            Toastr::error('Houve um erro no registro. Corrija e tente novamente!', 'Errors :(');
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput()
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        } else {
            $insert = $this->model->create($dadosForm);
        }
        if ($insert) {
            Toastr::success('Registro inserido com Sucesso!', 'Success :)');
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        }
    }

    public function update($id) {

        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }

        $rules = $this->model->rules;
        $rulesTratada = str_replace("((ID{?}))", $id, $rules);
        $dadosForm = $this->request->all();
        $client = ['type' => 'employees'];
        $dadosForm = array_merge($dadosForm, $client);
        
        $pass = $dadosForm['password'];
        $pass = ['password' => bcrypt($pass)];
        $dadosForm = array_merge($dadosForm, $pass);
        
        //dd($dadosForm);
        $validator = validator($dadosForm, $rulesTratada);

        /*
        if ($validator->fails()) {
            $messages = $validator->messages();
            return $messages;
        }
        */
        
        if ($validator->fails()) {
            Toastr::error('Houve um erro no registro. Corrija e tente novamente!', 'Errors :(');
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput()
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        } else {
            $item = $this->model->find($id);
            $update = $item->update($dadosForm);
        }

        if ($update) {
            Toastr::success('Registro alterado com Sucesso!', 'Success :)');
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        }
    }

}
