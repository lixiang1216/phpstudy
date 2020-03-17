<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-05 13:52:30
 * @LastEditTime : 2020-01-06 14:20:11
 * @Description: file content
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SiteController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){

        #dd(User::all());
        #dump(User::where(['role'=>'admin'])->get());
        // $user = new User();
        // $user->name = 'leebluecat';
        // $user->email = '945559567@qq.com';
        // $user->password = bcrypt('lixiangv5');
        // $user->role = 'vip';
        // dd($user->save());


        // $user = User::where(['name'=>'leebluecat'])->get();
        // $user->role('admin');
        // $user->save();
        // dd($user);


        $user = User::where(['name'=>'leebluecat'])->all();
        dd($user);
        #return view('about');
    }

}
