<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolesUser extends Model {

    use SoftDeletes;

    protected $table = 'role_user';
    protected $primaryKey = 'id';
    protected $fillable = [ 
            'role_id', 
            'user_id'
        ];
    
    public $rules = [
        'role_id' => 'required|numeric',
        'user_id' => 'required|numeric'
    ];

  

}
