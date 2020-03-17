<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-10 14:20:38
 * @LastEditTime : 2020-01-10 14:26:13
 * @Description: file content
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function show(User $user)
    { 
        return view('user.show',compact('user'));
    }

}