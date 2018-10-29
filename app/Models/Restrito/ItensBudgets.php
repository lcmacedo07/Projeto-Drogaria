<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItensBudgets extends Model {

    use SoftDeletes;

    protected $table = 'itens_budgets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'budget_id',
        'service_id',
        'quant',
    ];
    public $rules = [
        'budget_id' => 'required|numeric',
        'service_id' => 'required|numeric',
        'quant' => 'required|numeric',
    ];

}
