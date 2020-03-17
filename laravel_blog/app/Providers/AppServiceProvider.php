<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-07 11:18:43
 * @LastEditTime : 2020-01-08 15:37:23
 * @Description: file content
 */

namespace App\Providers;
use Carbon\Carbon;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Carbon::setLocale('zh');     
    }
}
