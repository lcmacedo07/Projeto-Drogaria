<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stocks extends Model {

    use SoftDeletes;

    protected $table = 'stocks';
    protected $primaryKey = 'sto_codigo';
    protected $fillable = [ 
            'sto_name',
            'sto_available_inventory',
            'sto_cost_value',
            'sto_salue_value',
            'sto_profit_value',
                ];
    
    public $rules = [
        'sto_name' => 'required|max:60',
        'sto_available_inventory' => 'required|numeric',
        'sto_cost_value' => 'required|numeric',
        'sto_salue_value' => 'required|numeric',
        'sto_profit_value' => 'required|numeric',
    ];

}
