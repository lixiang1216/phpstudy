<?php

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

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/book1', 'BookController@book');
Route::namespace('Book')->group(function(){
    
});











/*
Route::get('/book/{id}', function ($id) {
    return '获取BOOK'.$id;
})->where('id','[0-9]+');

Route::get('/books/{name?}', function ($name = 'book one') {
    return '获取书名'.$name;
});

//Route::redirect('/book', '/about', 301);


Route::post('/book', function () {
    return '获取BOOK-POST';
});

Route::put('/book', function () {
    return '新增BOOK';
});

Route::patch('/book', function () {
    return '修改BOOK';
});

Route::delete('/book', function () {
    return '删除BOOK';
});
*/