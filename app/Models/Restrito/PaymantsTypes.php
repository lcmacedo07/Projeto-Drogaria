<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymantsTypes extends Model {

    use SoftDeletes;

    protected $table = 'paymants_types';
    protected $primaryKey = 'pt_codigo';
    protected $fillable = [
        'pt_description',
    ];
    public $rules = [
        'pt_description' => 'required|max:120',
    ];

}
