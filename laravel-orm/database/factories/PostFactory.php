<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-09 15:57:09
 * @LastEditTime : 2020-01-09 16:07:34
 * @Description: file content
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'user_id' => DB::table('users')->inRandomOrder()->value('id')
    ];
});
