<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemExits extends Model {

    use SoftDeletes;

    protected $table = 'item_exits';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'exit_id',
            'product_id',
            'lot',
            'amount',
            'value',
                ];
    
    public $rules = [
        'exit_id' => 'required|numeric',
        'product_id' => 'required|numeric',
        'lot' => 'required|max:30',
        'amount' => 'required|numeric',
        'value' => 'required|numeric',
    ];

}
  