<?php

namespace App\Listeners;

use App\Events\KrameInComming;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendKrameInCommingNotification
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
    public function handle(KrameInComming $event)
    {
        // クレーマーなら通知を送信。
        if ($event->kramer->isKramer()) {
            foreach (\App\Models\User::enumSuperVisor() as $superVisor) {
                Mail::to($superVisor->email)->send(new \App\Mail\KrameInComming($event->kramer));
                //Mail::to($superVisor->email)->send(\App\Mail\KrameInComming($event->kramer));
            }
        }
    }
}
