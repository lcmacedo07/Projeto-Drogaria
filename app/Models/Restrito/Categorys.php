<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorys extends Model {

    use SoftDeletes;

    protected $table = 'categorys';
    protected $primaryKey = 'cat_codigo';
    protected $fillable = [ 
            'cat_category'
                ];
    
    public $rules = [
        'cat_category' => 'required|max:250',
    ];

}
