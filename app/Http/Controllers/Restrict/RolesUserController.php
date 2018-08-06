<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\RolesUser;
use App\Models\Restrito\Role;
use App\User;
use Gate;
use Alert;

class RolesUserController extends StandardController {

    protected $model;
    protected $roles;
    protected $users;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.roles-users';
    protected $redirectIndex = '/restrict/roles-users';

    public function __construct(RolesUser $model, Role $roles, User $users, Request $request) {
        $this->model = $model;
        $this->roles = $roles;
        $this->users = $users;
        $this->request = $request;
        $this->page = "roles-users";
        $this->titulo = "ROLES USERS";
        $this->gate = 'ROLES';
    }
 public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $roles = $this->roles->all();
        $users = $this->users->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('roles','users'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $roles = $this->roles->all();
        $users = $this->users->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','roles','users'))
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
    
    
}
