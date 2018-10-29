<?php

namespace App;

use App\Models\Restrito\Permission;
use App\Models\Restrito\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'genre',
        'date_of_birth',
        'cpf',
        'rg',
        'telephone',
        'cellphone',
        'cellphone2',
        'email',
        'password',
        'type',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     public $rules = [
        'name' => 'required|max:120',
        'genre' => 'required|max:1',
        'date_of_birth' => 'required|date',
        'cpf' => 'required|max:14',
        'telephone' => 'max:14',
        'cellphone' => 'required|max:16|unique:users,cellphone,((ID{?})),id',
        'cellphone2' => 'max:16',
        'email' => 'required|max:255|unique:users,email,((ID{?})),id',
        'password' => 'required|min:4',
        'type' => 'required|max:20',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function hasPermission(Permission $permission) {
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles) {
        if (is_array($roles) || is_object($roles)) {
            return $roles->intersect($this->roles)->count();
        }

        return $this->roles->contains('name', $roles);
    }

}
