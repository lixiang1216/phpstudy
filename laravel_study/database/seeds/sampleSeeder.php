<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-24 11:40:37
 * @LastEditTime : 2019-12-24 11:44:00
 * @Description: file content
 */

use Illuminate\Database\Seeder;

class sampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sample')->insert([
            'name' => 'demo',
            'url' => 'www.baidu.com',
            'test1'=>1,
            'test2'=>2,
            'test3'=>3
        ]);
    }
}
