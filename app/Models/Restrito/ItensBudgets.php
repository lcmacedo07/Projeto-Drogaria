<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItensBudgets extends Model {

    use SoftDeletes;

    protected $table = 'itens_budgets';
    protected $primaryKey = 'ib_codigo';
    protected $fillable = [
        'bud_codigo',
        'serv_codigo',
        'ib_quant',
    ];
    public $rules = [
        'bud_codigo' => 'required|numeric',
        'serv_codigo' => 'required|numeric',
        'ib_quant' => 'required|numeric',
    ];

}
