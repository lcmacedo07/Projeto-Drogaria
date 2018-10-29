<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Providers extends Model {

    use SoftDeletes;

    protected $table = 'providers';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'city_id',
            'provider',
            'address',
            'num',
            'neighborhood',
            'zip_code',
            'contact',
            'cnpj',
            'insc',
            'telephone',
        
                ];
    
    public $rules = [
        'city_id' => 'required|numeric',
        'provider' => 'required|max:200',
        'address' => 'required|max:60',
        'num' => 'required|numeric',
        'neighborhood' => 'required|max:40',
        'zip_code' => 'required|max:14|unique:providers,zip_code,((ID{?})),id',
        'contact' => 'required|max:50',
        'cnpj' => 'required|max:20|unique:providers,cnpj,((ID{?})),id',
        'insc' => 'required|max:120|unique:providers,insc,((ID{?})),id',
        'telephone' => 'required|max:14|unique:providers,telephone,((ID{?})),id',
    ];

}

