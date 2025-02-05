<?php

namespace App\Observers;

use App\Models\Dinosaur;

class DinosaurObserver
{
    /**
     * Handle the Dinosaur "created" event.
     */
    public function created(Dinosaur $dinosaur): void
    {
        //
    }

    /**
     * Handle the Dinosaur "updated" event.
     */
    public function updated(Dinosaur $dinosaur): void
    {
        //
    }

    /**
     * Handle the Dinosaur "deleted" event.
     */
    public function deleted(Dinosaur $dinosaur): void
    {
        //
    }

    /**
     * Handle the Dinosaur "restored" event.
     */
    public function restored(Dinosaur $dinosaur): void
    {
        //
    }

    /**
     * Handle the Dinosaur "force deleted" event.
     */
    public function forceDeleted(Dinosaur $dinosaur): void
    {
        //
    }
}
