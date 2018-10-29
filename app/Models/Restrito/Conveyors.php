<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conveyors extends Model {

    use SoftDeletes;

    protected $table = 'conveyors';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'city_id',
            'conveyors',
            'address',
            'num',
            'neighborhood',
            'cep',
            'cnpj',
            'insc',
            'contact',
            'telephone',
                ];
    
    public $rules = [
        'city_id' => 'required|numeric',
        'conveyors' => 'required|max:200|unique:conveyors,conveyors,((ID{?})),id',
        'address' => 'required|max:200',
        'num' => 'required|numeric',
        'neighborhood' => 'required|max:30',
        'cep' => 'required|max:14',
        'cnpj' => 'required|max:20|unique:conveyors,cnpj,((ID{?})),id',
        'insc' => 'required|max:20|unique:conveyors,insc,((ID{?})),id',
        'contact' => 'required|max:14',
        'telephone' => 'required|max:14|unique:conveyors,telephone,((ID{?})),id',
    ];

}
