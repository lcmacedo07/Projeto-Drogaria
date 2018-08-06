<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
use App\Http\Controllers\Restrict\StandardController;
use App\User;
use Gate;
use Alert;
use Illuminate\Support\Facades\Crypt;

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
        
        
        
//        dd($dadosForm);
        $validator = validator($dadosForm, $this->model->rules);
        /*
        if ($validator->fails()) {
            $messages = $validator->messages();
            return $messages;
        }
         * 
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
