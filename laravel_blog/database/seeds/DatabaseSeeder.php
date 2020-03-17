<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 11:18:43
 * @LastEditTime: 2020-01-07 14:11:33
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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
