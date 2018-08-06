<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Role;

class RolesController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.roles';
    protected $redirectIndex = '/restrict/roles';

    public function __construct(Role $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "roles";
        $this->titulo = "ROLES";
        $this->gate = 'ROLES';
    }
    
    
    
}
