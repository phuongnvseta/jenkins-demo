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
    public function setNameAttribute($value) 
    {
        $this->attributes['name'] = 'Mr '.$value;
    }
    
    public function getNameAttribute($value)
    {
        return 'Mr '.$value;
    }
    /**
     * Get newest user
     *
     * @return user
     */
   
    public function getNewestUser()
    {
               
        $user =  $this->orderBy('created_at', 'desc')->first();
        if (empty($user)) {
            return false;
        }
        return $user;
        
    }
}
