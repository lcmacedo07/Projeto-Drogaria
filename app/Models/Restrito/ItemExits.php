<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemExits extends Model {

    use SoftDeletes;

    protected $table = 'item_exits';
    protected $primaryKey = 'iteme_codigo';
    protected $fillable = [ 
            'exi_codigo',
            'prod_codigo',
            'iteme_lot',
            'iteme_amount',
            'iteme_value',
                ];
    
    public $rules = [
        'exi_codigo' => 'required|numeric',
        'prod_codigo' => 'required|numeric',
        'iteme_lot' => 'required|max:30',
        'iteme_amount' => 'required|numeric',
        'iteme_value' => 'required|numeric',
    ];

}
  