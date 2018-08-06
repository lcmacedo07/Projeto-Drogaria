<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paymants extends Model {

    use SoftDeletes;

    protected $table = 'paymants';
    protected $primaryKey = 'pay_codigo';
    protected $fillable = [
        'pt_codigo',
        'pay_datelaunch',
        'pay_datematurity',
        'pay_datepayment',
        'pay_value',
        'pay_complements',
    ];
    public $rules = [
        'pt_codigo' => 'required|numeric',
        'pay_datelaunch' => 'required|date',
        'pay_datematurity' => 'required|date',
        'pay_datepayment' => 'required|date',
        'pay_value' => 'required',
        'pay_complements' => 'required|max:200',
    ];

}
