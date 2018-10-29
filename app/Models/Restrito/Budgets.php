<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Budgets extends Model {

    use SoftDeletes;

    protected $table = 'budgets';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'validateproposal',
        'conditionspayments',
        'qtdpayments',
        'discount',
        'value',
        'status',
    ];
    public $rules = [
        'user_id' => 'required|numeric',
        'validateproposal' => 'required|numeric',
        'conditionspayments' => 'required|max:30',
        'qtdpayments' => 'required|numeric',
        'discount' => 'numeric',
        'value' => 'numeric',
        'status' => 'required|max:30',
    ];
}
