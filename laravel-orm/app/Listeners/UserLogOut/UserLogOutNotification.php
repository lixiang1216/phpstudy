<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-16 14:46:25
 * @LastEditTime: 2020-01-16 14:47:29
 * @Description: file content
 */

namespace App\Listeners\UserLogOut;

use App\Events\UserLogOut;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class UserLogOutNotification
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
     * @param  UserLogOut  $event
     * @return void
     */
    public function handle(UserLogOut $event)
    {
        Log::info('已经退出啦');
    }
}
