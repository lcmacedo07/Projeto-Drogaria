<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensagem extends Model {

    use SoftDeletes;

    protected $table = 'mensagens';
    protected $primaryKey = 'men_codigo';
    protected $fillable = [ 
            'men_name',
            'men_email',
            'men_description',
                ];
    
    public $rules = [
        'men_name' => 'required|max:60',
        'men_email' => 'required|max:60',
        'men_description' => 'required|max:500',
    ];
   
}
