<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\PermissionRole;
use App\Models\Restrito\Role;
use App\Models\Restrito\Permission;
use Gate;
use Alert;

class PermissionRolesController extends StandardController {

    protected $model;
    protected $roles;
    protected $permissions;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.permissions-roles';
    protected $redirectIndex = '/restrict/permission-roles';

    public function __construct(PermissionRole $model, Permission $permissions, Role $roles, Request $request) {
        $this->model = $model;
        $this->roles = $roles;
        $this->permissions = $permissions;
        $this->request = $request;
        $this->page = "permission-roles";
        $this->titulo = "PERMISSIONS ROLES";
        $this->gate = 'PERMISSIONS-ROLES';
    }
  
    public function create() {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $roles = $this->roles->all();
        $permissions = $this->permissions->all();
        return view("{$this->nomeView}.cadastrar-editar", compact('roles','permissions'))
                        ->with('page', $this->page)
                        ->with('titulo', $this->titulo);
    }
    
    public function edit($id) {
        $gate = $this->gate;
        if (Gate::denies("$gate")) {
            abort(403, 'Não Autorizado!');
        }
        $roles = $this->roles->all();
        $permissions = $this->permissions->all();
        $data = $this->model->find($id);
        return view("{$this->nomeView}.cadastrar-editar", compact('data','roles','permissions'))
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
