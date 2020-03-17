<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-16 14:46:25
 * @LastEditTime : 2020-01-16 14:47:00
 * @Description: file content
 */

namespace App\Listeners\UserLogin;

use App\Events\UserLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class UserLoginNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserLogin  $event
     * @return void
     */
    public function handle(UserLogin $event)
    {
        Log::info($event->user->name."已经登录了");
    }
}
