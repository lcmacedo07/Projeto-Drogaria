<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credits extends Model {

    use SoftDeletes;

    protected $table = 'credits';
    protected $primaryKey = 'id';
    protected $fillable = [
        'credits_type_id',
        'budget_id',
        'datereferencies',
        'datelaunch',
        'datematurity',
        'datereceipt',
        'value',
        'valuereceipt',
        'documentnumber',
        'ournumber',
        'complements',
        'status',
    ];
    public $rules = [
        'credits_type_id' => 'required|numeric',
        'budget_id' => 'required|numeric',
        'datereferencies' => 'required|date',
        'datelaunch' => 'required|date',
        'datematurity' => 'required|date',
        'datereceipt' => 'required|date',
        'value' => 'required',
        'valuereceipt' => 'required',
        'documentnumber' => 'required|max:20|unique:credits,documentnumber,((ID{?})),id',
        'ournumber' => 'required|max:25',
        'complements' => 'max:200',
        'status' => 'required|max:50',
    ];

}
