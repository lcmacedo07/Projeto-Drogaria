<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conveyors extends Model {

    use SoftDeletes;

    protected $table = 'conveyors';
    protected $primaryKey = 'con_codigo';
    protected $fillable = [ 
            'cit_codigo',
            'con_conveyors',
            'con_address',
            'con_num',
            'con_neighborhood',
            'con_cep',
            'con_cnpj',
            'con_insc',
            'con_contact',
            'con_telephone',
                ];
    
    public $rules = [
        'cit_codigo' => 'required|numeric',
        'con_conveyors' => 'required|max:200',
        'con_address' => 'required|max:200',
        'con_num' => 'required|numeric',
        'con_neighborhood' => 'required|max:30',
        'con_cep' => 'required|max:14',
        'con_cnpj' => 'required|max:20',
        'con_insc' => 'required|max:20',
        'con_contact' => 'required|max:14',
        'con_telephone' => 'required|max:14',
    ];

}
