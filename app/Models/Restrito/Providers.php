<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Providers extends Model {

    use SoftDeletes;

    protected $table = 'providers';
    protected $primaryKey = 'pro_codigo';
    protected $fillable = [ 
            'cit_codigo',
            'pro_provider',
            'pro_address',
            'pro_num',
            'pro_neighborhood',
            'pro_zip_code',
            'pro_contact',
            'pro_cnpj',
            'pro_insc',
            'pro_telephone',
        
                ];
    
    public $rules = [
        'cit_codigo' => 'required|numeric',
        'pro_provider' => 'required|max:200',
        'pro_address' => 'required|max:60',
        'pro_num' => 'required|numeric',
        'pro_neighborhood' => 'required|max:40',
        'pro_zip_code' => 'required|max:14',
        'pro_contact' => 'required|max:50',
        'pro_cnpj' => 'required|max:20',
        'pro_insc' => 'required|max:120',
        'pro_telephone' => 'required|max:14',
    ];

}

