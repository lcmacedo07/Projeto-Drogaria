<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\Models\Restrito\Permission;

class PermissionsController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.permissions';
    protected $redirectIndex = '/restrict/permissions';

    public function __construct(Permission $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "permissions";
        $this->titulo = "PERMISSIONS";
        $this->gate = 'PERMISSIONS';
    }
    
    
    
}
