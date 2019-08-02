<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'assigned_roles');
    }

    public function hasRoles(array $roles)
    {
        // dd($this->role);
        foreach ($roles as $role)
        {
            foreach ($this->roles as $userRoles)
            {
                if ($userRoles->name === $role)
                {
                    return true;
                }
            }
        }
        return false;

    }
}
