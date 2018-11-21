<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gate;
use Brian2694\Toastr\Facades\Toastr;

class StandardController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;
   
    //protected $totalPorPagina = 5;    

    public function index() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        
        $data = $this->model->all();
        //$data = $this->model->paginate($this->totalPorPagina);
        
        return view("{$this->nomeView}.index", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        return view("{$this->nomeView}.cadastrar-editar")
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }

    public function store() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $dadosForm = $this->request->all();
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

    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function update($id) {


        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }

        $rules = $this->model->rules;
        $rulesTratada = str_replace("((ID{?}))", $id, $rules);
        $dadosForm = $this->request->all();

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

    public function destroy($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $item = $this->model->find($id);
        $deleta = $item->delete();

        if ($deleta) {
            return '1';
        } else {
            Toastr::error('Pressione F5 e verifique se o arquivo continua na lista. Caso o erro persista, entre em contato com a Administração.', 'Errors :(');
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        }
    }

    public function show($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $data = $this->model->find($id);
        return view("{$this->nomeView}.show", compact('data'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function delete($id){
         $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        
        }
         $item = $this->model->find($id);
         $deleta = $item->delete();
         
         if ($deleta) {
            Toastr::success('Deletado com sucesso!', 'Success :)');
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        } else {
            Toastr::error('Pressione F5 e verifique se o arquivo continua na lista. Caso o erro persista, entre em contato com a Administração.', 'Errors :(');
            return redirect("$this->redirectIndex")
                            ->with('page', $this->page)
                            ->with('titulo', $this->titulo);
        }
     }
     
}
