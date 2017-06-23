<?php

namespace App\Listeners;

use App\Events\CreatePost;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreatePostListener
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
     * @param  CreatePost  $event
     * @return void
     */
    public function handle(CreatePost $event)
    {
        //
    }
}
