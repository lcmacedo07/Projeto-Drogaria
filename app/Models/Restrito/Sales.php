<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model {

    use SoftDeletes;

    protected $table = 'sales';
    protected $primaryKey = 'sal_codigo';
    protected $fillable = [ 
            'sal_date',
            'sal_amount',
            'sal_exit_price',
            'sal_cost_price',
                ];
    
    public $rules = [
        'sal_date' => 'required|date',
        'sal_amount' => 'required|numeric',
        'sal_exit_price' => 'required|numeric',
        'sal_cost_price' => 'required|numeric',
    ];

}
