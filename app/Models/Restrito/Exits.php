<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exits extends Model {

    use SoftDeletes;

    protected $table = 'exits';
    protected $primaryKey = 'exi_codigo';
    protected $fillable = [ 
            'sto_codigo',
            'con_codigo',
            'exi_total',
            'exi_freight',
            'exi_tax',
                ];
    
    public $rules = [
        'sto_codigo' => 'required|numeric',
        'con_codigo' => 'required|numeric',
        'exi_total' => 'required|numeric',
        'exi_freight' => 'required|numeric',
        'exi_tax' => 'required|numeric',
    ];

}
 