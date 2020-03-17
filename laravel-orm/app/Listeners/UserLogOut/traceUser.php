<?php

namespace App\Listeners\UserLogOut;

use App\Events\UserLogOut;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class traceUser
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
        //
    }
}
