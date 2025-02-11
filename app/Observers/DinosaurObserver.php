<?php

namespace App\Observers;

use App\Models\Dinosaur;

class DinosaurObserver
{

    /* Ennek az öt funkciónak a párja ING végződéssel ami az esemény ELŐTT történik meg */
    /* Ahhoz hogy az observer elinduljon az alkalmazással
    be kell rakni a providers/appserviceprovider fájl BOOT funkciójába */
    /**
     * Handle the Dinosaur "created" event. 
     * /* Ha a store funkció lement és új modell született az adatbázisban */

    public function created(Dinosaur $dinosaur): void
    {
/*         if (auth()) {
            $dinosaur->created_by = auth()->user()->id;
        } */
        $dinosaur->created_by = 23;
        $dinosaur->save();
    }

    /**
     * Handle the Dinosaur "updated" event. Ha az UPDATE parancs lement az adatbázisban
     * CSAK AKKOR HASZNÁLD MÚLT IDŐBEN, hanem az adott (dinosaur) modellt akarod frissíteni
     * #Infinite loop
     */
    public function updating(Dinosaur $dinosaur): void
    {
        $dinosaur->updated_by = 23;
        $dinosaur->save();
    }

    /**
     * Handle the Dinosaur "deleted" event. Ha a DELETE parancs lement az adatbázisban
     */
    public function deleted(Dinosaur $dinosaur): void
    {
        $dinosaur->deleted_by = 23;
        $dinosaur->save();
    }

    /**
     * Handle the Dinosaur "restored" event. Ha a softdelete által kitöltött deleted_at mező újra NULL értékre áll.
     */
    public function restored(Dinosaur $dinosaur): void
    {
        //
    }

    /**
     * Handle the Dinosaur "force deleted" event. Ha teljes adattörlés volt az adatbázisból
     */
    public function forceDeleted(Dinosaur $dinosaur): void
    {
        //
    }
}
