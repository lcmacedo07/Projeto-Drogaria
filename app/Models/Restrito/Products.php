<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model {

    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'category_id',
            'provider_id',
            'description',
            'product_code',
            'weight',
            'controlled',
            'determined_amount',
                ];
    
    public $rules = [
        'category_id' => 'required|numeric',
        'provider_id' => 'required|numeric',
        'description' => 'required|max:1000',
        'product_code' => 'required|max:7|unique:products,product_code,((ID{?})),id',
        'weight' => 'required|numeric',
        'controlled' => 'required|max:200',
        'determined_amount' => 'required|numeric',
    ];

}

