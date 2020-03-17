<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-23 14:42:24
 * @LastEditTime : 2019-12-24 14:18:27
 * @Description: file content
 */

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['name' => 'admin','email' => 'admin@qq.com','password' => bcrypt('admin'),'role' => 'admin'],
            ['name' => 'lixiang','email' => 'lixiang@qq.com','password' => bcrypt('lixiang'),'role' => 'vip'],
            ['name' => 'lisijia','email' => 'lisijia@qq.com','password' => bcrypt('lisijia'),'role' => 'vip'],
            ['name' => 'lifengjun','email' => 'lifengjun@qq.com','password' => bcrypt('lifengjun'),'role' => 'vip'],

            
        ]);
    }
}
