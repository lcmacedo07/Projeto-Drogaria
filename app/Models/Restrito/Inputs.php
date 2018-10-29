<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inputs extends Model {

    use SoftDeletes;

    protected $table = 'inputs';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'conveyor_id',
            'requested_date',
            'entry_date',
            'total',
            'freight',
            'numnf',
            'tax',
        
                ];
    
    public $rules = [
        'conveyor_id' => 'required|numeric',
        'requested_date' => 'required|date',
        'entry_date' => 'required|date',
        'total' => 'required|numeric',
        'freight' => 'required|numeric',
        'numnf' => 'required|numeric|unique:inputs,numnf,((ID{?})),id',
        'tax' => 'required|numeric',
    ];

}
