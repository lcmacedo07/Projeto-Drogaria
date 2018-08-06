<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemInputs extends Model {

    use SoftDeletes;

    protected $table = 'item_inputs';
    protected $primaryKey = 'itemi_codigo';
    protected $fillable = [ 
            'prod_codigo',
            'inp_codigo',
            'itemi_lot',
            'itemi_amount',
            'itemi_value',
                ];
    
    public $rules = [
        'prod_codigo' => 'required|numeric',
        'inp_codigo' => 'required|numeric',
        'itemi_lot' => 'required|max:30',
        'itemi_amount' => 'required|numeric',
        'itemi_value' => 'required|numeric',
    ];

}
