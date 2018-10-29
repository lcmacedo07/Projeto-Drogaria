<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stores extends Model {

    use SoftDeletes;

    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'city_id',
            'name',
            'cnpj',
            'address',
            'uf',
            'telephone',
            'zip_code',
            'social_reason',
            'fantasy_name',
            'insc',

        
        ];
    
    public $rules = [
        'city_id' => 'required|numeric',
        'name' => 'required|max:30|unique:stores,name,((ID{?})),id',
        'cnpj' => 'required|max:20|unique:stores,cnpj,((ID{?})),id',
        'address' => 'required|max:200',
        'uf' => 'required|max:2|unique:stores,uf,((ID{?})),id',
        'telephone' => 'required|max:14|unique:stores,telephone,((ID{?})),id',
        'zip_code' => 'required|max:15|unique:stores,zip_code,((ID{?})),id',
        'social_reason' => 'required|max:200|unique:stores,social_reason,((ID{?})),id',
        'fantasy_name' => 'required|max:200|unique:stores,fantasy_name,((ID{?})),id',
        'insc' => 'required|max:20|unique:stores,insc,((ID{?})),id',
    ];

}
      