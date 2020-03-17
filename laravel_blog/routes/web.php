<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 11:18:43
 * @LastEditTime: 2020-01-07 11:48:15
 * @Description: file content
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'posts' => 'PostController'
]);