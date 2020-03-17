<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 14:09:21
 * @LastEditTime: 2020-01-07 14:11:00
 * @Description: file content
 */
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Lixiang',
            'email' => '945559567@qq.com',
            'password' => bcrypt('12345678'),
            'role'=>'admin'
        ]);
    }
}
