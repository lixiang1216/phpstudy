<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-24 14:24:20
 * @LastEditTime: 2020-01-06 15:04:35
 * @Description: file content
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function author(){
        return $this->belongsTo('App\User','author_id');
    }
}
