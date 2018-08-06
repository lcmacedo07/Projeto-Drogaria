<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditsTypes extends Model {

    use SoftDeletes;

    protected $table = 'credits_types';
    protected $primaryKey = 'ct_codigo';
    protected $fillable = [
        'ct_descriptions',
    ];
    public $rules = [
        'ct_descriptions' => 'required|max:120',
    ];

}
