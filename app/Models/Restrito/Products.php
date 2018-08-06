<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model {

    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'prod_codigo';
    protected $fillable = [ 
            'cat_codigo',
            'pro_codigo',
            'prod_description',
            'prod_weight',
            'prod_controlled',
            'prod_determined_amount',
                ];
    
    public $rules = [
        'cat_codigo' => 'required|numeric',
        'pro_codigo' => 'required|numeric',
        'prod_description' => 'required|max:1000',
        'prod_weight' => 'required|numeric',
        'prod_controlled' => 'required|max:200',
        'prod_determined_amount' => 'required|numeric',
    ];

}

