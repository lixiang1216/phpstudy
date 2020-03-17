<?php
/*
 * @Author: Lixiang
 * @Date: 2019-12-24 14:51:50
 * @LastEditTime: 2019-12-24 15:01:58
 * @Description: file content
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'published_at' =>  now(),
        'author_id' => User::all()->random()->id
    ];
});
