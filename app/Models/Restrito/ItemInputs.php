<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemInputs extends Model {

    use SoftDeletes;

    protected $table = 'item_inputs';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'product_id',
            'input_id',
            'lot',
            'amount',
            'value',
                ];
    
    public $rules = [
        'product_id' => 'required|numeric',
        'input_id' => 'required|numeric',
        'lot' => 'required|max:30',
        'amount' => 'required|numeric',
        'value' => 'required|numeric',
    ];

}
