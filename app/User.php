<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const USER_ADMIN = 'admin';
    const USER_EMPLOYEE = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Tells if the user is a USER_ADMIN type user
     *
     * @return boolean
     */
    public function isUserAdmin()
    {
        return $this->user_type == User::USER_ADMIN;
    }

    public function isUserEmployee()
    {
        return $this->user_type == User::USER_EMPLOYEE;
    }

    public function projectManagements()
    {
        return $this->hasMany(ProjectManagement::class, 'user_id');
    }
}
