<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Citys extends Model {

    use SoftDeletes;

    protected $table = 'citys';
    protected $primaryKey = 'cit_codigo';
    protected $fillable = [ 
            'cit_city',
            'cit_uf'
                ];
    
    public $rules = [
        'cit_city' => 'required|max:30',
        'cit_uf' => 'required|max:2',
    ];

}

