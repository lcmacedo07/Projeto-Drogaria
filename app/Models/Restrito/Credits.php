<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credits extends Model {

    use SoftDeletes;

    protected $table = 'credits';
    protected $primaryKey = 'cred_codigo';
    protected $fillable = [
        'ct_codigo',
        'bud_codigo',
        'cred_datereferencies',
        'cred_datelaunch',
        'cred_datematurity',
        'cred_datereceipt',
        'cred_value',
        'cred_valuereceipt',
        'cred_documentnumber',
        'cred_ournumber',
        'cred_complements',
        'cred_status',
    ];
    public $rules = [
        'ct_codigo' => 'required|numeric',
        'bud_codigo' => 'required|numeric',
        'cred_datereferencies' => 'required|date',
        'cred_datelaunch' => 'required|date',
        'cred_datematurity' => 'required|date',
        'cred_datereceipt' => 'required|date',
        'cred_value' => 'required',
        'cred_valuereceipt' => 'required',
        'cred_documentnumber' => 'required|max:20',
        'cred_ournumber' => 'required|max:25',
        'cred_complements' => 'max:200',
        'cred_status' => 'required|max:50',
    ];

}
