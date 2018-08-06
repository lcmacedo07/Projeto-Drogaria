<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inputs extends Model {

    use SoftDeletes;

    protected $table = 'inputs';
    protected $primaryKey = 'inp_codigo';
    protected $fillable = [ 
            'con_codigo',
            'inp_requested_date',
            'inp_entry_date',
            'inp_total',
            'inp_freight',
            'inp_numnf',
            'inp_tax',
        
                ];
    
    public $rules = [
        'con_codigo' => 'required|numeric',
        'inp_requested_date' => 'required|date',
        'inp_entry_date' => 'required|date',
        'inp_total' => 'required|numeric',
        'inp_freight' => 'required|numeric',
        'inp_numnf' => 'required|numeric',
        'inp_tax' => 'required|numeric',
    ];

}
