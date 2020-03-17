<?php
/*
 * @Author: Lixiang
 * @Date: 2019-10-09 14:51:45
 * @LastEditTime : 2019-12-24 11:41:56
 * @Description: file content
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(sampleSeeder::class);
    }
}
