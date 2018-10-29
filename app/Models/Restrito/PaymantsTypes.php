<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymantsTypes extends Model {

    use SoftDeletes;

    protected $table = 'paymants_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description',
    ];
    public $rules = [
        'description' => 'required|max:120|unique:paymants_types,description,((ID{?})),id',
    ];

}
