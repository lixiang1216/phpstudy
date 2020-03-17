<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-13 17:59:29
 * @LastEditTime : 2020-01-13 18:35:18
 * @Description: file content
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasManyThrough('App\Post','App\User');
    }


}
