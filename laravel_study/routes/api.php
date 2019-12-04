<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

| 在这里您可以为应用程序注册api路由。这些
| 路由由routeserviceprovider在
| 分配给“api”中间件组。享受建立你的api！
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
