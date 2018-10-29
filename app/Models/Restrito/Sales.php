<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model {

    use SoftDeletes;

    protected $table = 'sales';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'date',
            'amount',
            'exit_price',
            'cost_price',
                ];
    
    public $rules = [
        'date' => 'required|date',
        'amount' => 'required|numeric',
        'exit_price' => 'required|numeric',
        'cost_price' => 'required|numeric',
    ];

}
