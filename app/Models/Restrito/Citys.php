<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Citys extends Model {

    use SoftDeletes;

    protected $table = 'citys';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'city',
            'uf'
                ];
    
    public $rules = [
        'city' => 'required|max:30|unique:citys,city,((ID{?})),id',
        'uf' => 'required|max:2|unique:citys,uf,((ID{?})),id',
    ];

}

