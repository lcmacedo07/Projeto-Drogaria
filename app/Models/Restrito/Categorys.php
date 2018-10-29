<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorys extends Model {

    use SoftDeletes;

    protected $table = 'categorys';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'category'
                ];
    
    public $rules = [
        'category' => 'required|max:250|unique:categorys,category,((ID{?})),id',
    ];

}
