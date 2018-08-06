<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stores extends Model {

    use SoftDeletes;

    protected $table = 'stores';
    protected $primaryKey = 'sto_codigo';
    protected $fillable = [ 
            'cit_codigo',
            'sto_name',
            'sto_cnpj',
            'sto_address',
            'sto_uf',
            'sto_telephone',
            'sto_zip_code',
            'sto_social_reason',
            'sto_fantasy_name',
            'sto_insc',

        
        ];
    
    public $rules = [
        'cit_codigo' => 'required|numeric',
        'sto_name' => 'required|max:30',
        'sto_cnpj' => 'required|max:20',
        'sto_address' => 'required|max:200',
        'sto_uf' => 'required|max:2',
        'sto_telephone' => 'required|max:14',
        'sto_zip_code' => 'required|max:15',
        'sto_social_reason' => 'required|max:200',
        'sto_fantasy_name' => 'required|max:200',
        'sto_insc' => 'required|max:20',
    ];

}
      