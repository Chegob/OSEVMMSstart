<?php

namespace App\Listeners;

use App\Providers\NewVehicleHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminViaSlack
{
   
    /**
     * Handle the event.
     *
     * @param  NewVehicleHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewVehicleHasRegisteredEvent $event)
    {
        dump('Slack Message Here');
    }
}
