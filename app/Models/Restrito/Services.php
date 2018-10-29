<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model {

    use SoftDeletes;

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = [
        'type',
        'description',
        'value',
    ];
    public $rules = [
        'type' => 'required|max:200|unique:services,type,((ID{?})),id',
        'description' => 'required|max:500',
        'value' => 'required',
    ];

}
