<?php

namespace App\Http\Controllers\Restrict;

use App\Models\Restrito\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('restrict.contact.index',compact('contacts'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('restrict.contact.show',compact('contact'));
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        Toastr::success('Mensagem de Contato Deletada com Sucesso!','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
