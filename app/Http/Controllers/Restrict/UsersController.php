<?php

namespace App\Http\Controllers\Restrict;

use Illuminate\Http\Request;
//use App\Http\Controllers\Restrict\StandardController;
use App\Http\Controllers\Restrict\StandardController;
use App\User;
use Gate;
use Alert;

class UsersController extends StandardController {

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.users';
    protected $redirectIndex = '/restrict/users';

    public function __construct(User $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "users";
        $this->titulo = "USUÁRIOS";
        $this->gate = 'USERS';
    }
    
}