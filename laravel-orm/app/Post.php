<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-09 15:40:13
 * @LastEditTime : 2020-01-13 15:08:32
 * @Description: file content
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','user_id'];
    //
    public function user()
    {
        # code...
        return $this->belongsTo('App\User','user_id')->withDefault(['name'=>1]);
    }
}
