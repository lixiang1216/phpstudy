<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-10 14:42:21
 * @LastEditTime : 2020-01-10 15:30:31
 * @Description: file content
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    protected $fillable = ['name'];
    //
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
