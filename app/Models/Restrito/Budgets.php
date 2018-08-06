<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Budgets extends Model {

    use SoftDeletes;

    protected $table = 'budgets';
    protected $primaryKey = 'bud_codigo';
    protected $fillable = [
        'user_id',
        'bud_validateproposal',
        'bud_conditionspayments',
        'bud_qtdpayments',
        'bud_discount',
        'bud_value',
        'bud_status',
    ];
    public $rules = [
        'user_id' => 'required|numeric',
        'bud_validateproposal' => 'required|numeric',
        'bud_conditionspayments' => 'required|max:30',
        'bud_qtdpayments' => 'required|numeric',
        'bud_discount' => 'numeric',
        'bud_value' => 'numeric',
        'bud_status' => 'required|max:30',
    ];
}
