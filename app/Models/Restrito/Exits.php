<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exits extends Model {

    use SoftDeletes;

    protected $table = 'exits';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'store_id',
            'conveyor_id',
            'total',
            'freight',
            'tax',
                ];
    
    public $rules = [
        'store_id' => 'required|numeric',
        'conveyor_id' => 'required|numeric',
        'total' => 'required|numeric',
        'freight' => 'required|numeric',
        'tax' => 'required|numeric',
    ];

}
 