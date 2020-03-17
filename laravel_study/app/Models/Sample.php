<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-24 12:11:55
 * @LastEditTime : 2019-12-24 13:57:10
 * @Description: file content
 */

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class Sample
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 'test1', 'test2', 'test3'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



}
