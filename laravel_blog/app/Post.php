<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 11:31:16
 * @LastEditTime : 2020-01-09 12:22:58
 * @Description: file content
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //软删除
    use SoftDeletes;

    protected $fillable=['title','body','author_id','published_at'];
    protected $dates = ['published_at'];

    public function user()
    {
        return $this->belongsTo('App\User','author_id');
    }

    public function setPublishedAtAttribute($value){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$value);
    }
}
