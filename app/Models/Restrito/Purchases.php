<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchases extends Model {

    use SoftDeletes;

    protected $table = 'purchases';
    protected $primaryKey = 'pur_codigo';
    protected $fillable = [ 
            'pro_codigo',
            'pur_date',
            'pur_reference',
            'pur_amount',
            'pur_value',
                ];
    
    public $rules = [
        'pro_codigo' => 'required|numeric',
        'pur_date' => 'required|date',
        'pur_reference' => 'required|max:200',
        'pur_amount' => 'required|numeric',
        'pur_value' => 'required|numeric',
    ];

}

