<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 13:57:57
 * @LastEditTime : 2020-01-07 14:36:16
 * @Description: file content
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'author_id' => DB::table('users')->inRandomOrder()->value('id'),
        'published_at' => now()
    ];
});
