<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreditsTypes extends Model {

    use SoftDeletes;

    protected $table = 'credits_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'descriptions',
    ];
    public $rules = [
        'descriptions' => 'required|max:120',
    ];

}
