<?php

namespace App\Http\Controllers\Restrict;

use App\Models\Restrito\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Restrict\StandardController;

class ContactController extends StandardController{

    protected $model;
    protected $request;
    protected $page;
    protected $gate;
    protected $nomeView = 'restrict.contact';
    protected $redirectIndex = '/restrict/contact';

    public function __construct(Contact $model, Request $request) {
        $this->model = $model;
        $this->request = $request;
        $this->page = "contact";
        $this->titulo = "MENSAGEM";
        $this->gate = 'CONTACT';
    }
   
}
