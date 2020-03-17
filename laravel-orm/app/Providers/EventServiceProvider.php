<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-09 14:15:32
 * @LastEditTime : 2020-01-16 14:46:19
 * @Description: file content
 */

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\UserLogin'=>[
            'App\Listeners\UserLogin\UserLoginNotification',
            'App\Listeners\UserLogin\traceUser'
        ],
        'App\Events\UserLogOut'=>[
            'App\Listeners\UserLogOut\UserLogOutNotification',
            'App\Listeners\UserLogOut\traceUser'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
