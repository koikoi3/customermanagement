<?php

namespace App\Listeners;

use App\Events\KramerInComming;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendKramerInCommingNotification
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
     * @param  \App\Events\KrameInComming  $event
     * @return void
     */
    public function handle(KramerInComming $event)
    {
        // クレーマーなら通知を送信。
        if ($event->kramer->isKramer()) {
            foreach (\App\Models\User::enumSuperVisor() as $superVisor) {
                Mail::to($superVisor->email)->send(new \App\Mail\KramerInComming($event->kramer));
                //Mail::to($superVisor->email)->send(\App\Mail\KrameInComming($event->kramer));
            }
        }
    }
}
