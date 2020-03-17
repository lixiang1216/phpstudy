<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-06 15:34:07
 * @LastEditTime : 2020-01-06 16:58:36
 * @Description: file content
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'realname', 'user_id',
    ];
    //
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
        
    }
}
