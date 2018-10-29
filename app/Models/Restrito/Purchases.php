<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchases extends Model {

    use SoftDeletes;

    protected $table = 'purchases';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'provider_id',
            'date',
            'reference',
            'amount',
            'value',
                ];
    
    public $rules = [
        'provider_id' => 'required|numeric',
        'date' => 'required|date',
        'reference' => 'required|max:200|unique:purchases,reference,((ID{?})),id',
        'amount' => 'required|numeric',
        'value' => 'required|numeric',
    ];

}

