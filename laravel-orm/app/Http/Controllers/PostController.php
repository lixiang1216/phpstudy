<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-10 14:20:38
 * @LastEditTime : 2020-01-10 14:33:29
 * @Description: file content
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function show(Post $post,$name)
    { 
        return view('post.show',compact('post'));
    }

}