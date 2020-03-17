<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-09 14:15:32
 * @LastEditTime : 2020-01-16 18:46:41
 * @Description: file content
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','country_id','role',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne('App\Profile','user_id');
    }

    public function post()
    {
        return $this->hasMany('App\Post','user_id');
    }

    public function habits(){
        return $this->belongsToMany('App\Habit')->withPivot(['level']);
    }
}
