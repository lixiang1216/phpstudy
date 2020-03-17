<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-09 14:22:02
 * @LastEditTime : 2020-01-09 14:31:48
 * @Description: file content
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['phone','user_id'];
    //
    public function user()
    {
        # code...
        return $this->belongsTo('App\User','user_id');
    }
}
