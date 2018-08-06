<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model {

    use SoftDeletes;

    protected $table = 'services';
    protected $primaryKey = 'serv_codigo';
    protected $fillable = [
        'serv_type',
        'serv_description',
        'serv_value',
    ];
    public $rules = [
        'serv_type' => 'required|max:200',
        'serv_description' => 'required|max:500',
        'serv_value' => 'required',
    ];

}
