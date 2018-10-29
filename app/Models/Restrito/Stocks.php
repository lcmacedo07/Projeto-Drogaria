<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stocks extends Model {

    use SoftDeletes;

    protected $table = 'stocks';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'name',
            'available_inventory',
            'cost_value',
            'salue_value',
            'profit_value',
                ];
    
    public $rules = [
        'name' => 'required|max:60|unique:stocks,name,((ID{?})),id',
        'available_inventory' => 'required|numeric',
        'cost_value' => 'required|numeric',
        'salue_value' => 'required|numeric|unique:stocks,salue_value,((ID{?})),id',
        'profit_value' => 'required|numeric',
    ];

}
