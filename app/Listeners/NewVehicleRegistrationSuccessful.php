<?php

namespace App\Listeners;

use App\Providers\NewVehicleHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewVehicleRegistrationSuccessful
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
     * @param  NewVehicleHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewVehicleHasRegisteredEvent $event)
    {
        //
    }
}
