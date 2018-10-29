<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paymants extends Model {

    use SoftDeletes;

    protected $table = 'paymants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'paymants_type_id',
        'datelaunch',
        'datematurity',
        'datepayment',
        'value',
        'complements',
    ];
    public $rules = [
        'paymants_type_id' => 'required|numeric,paymants_type_id,((ID{?})),id',
        'datelaunch' => 'required|date',
        'datematurity' => 'required|date',
        'datepayment' => 'required|date',
        'value' => 'required',
        'complements' => 'required|max:200',
    ];

}
