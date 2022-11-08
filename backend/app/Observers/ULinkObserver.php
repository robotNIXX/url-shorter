<?php

namespace App\Observers;

use App\Models\ULink;
use Illuminate\Support\Str;

class ULinkObserver
{

    public function saving(ULink $uLink) {
        if (!$uLink->short_link) {
            $uLink->short_link = Str::random(8);
        }
    }
    /**
     * Handle the ULink "created" event.
     *
     * @param  \App\Models\ULink  $uLink
     * @return void
     */
    public function created(ULink $uLink)
    {
        //
    }

    /**
     * Handle the ULink "updated" event.
     *
     * @param  \App\Models\ULink  $uLink
     * @return void
     */
    public function updated(ULink $uLink)
    {
        //
    }

    /**
     * Handle the ULink "deleted" event.
     *
     * @param  \App\Models\ULink  $uLink
     * @return void
     */
    public function deleted(ULink $uLink)
    {
        //
    }

    /**
     * Handle the ULink "restored" event.
     *
     * @param  \App\Models\ULink  $uLink
     * @return void
     */
    public function restored(ULink $uLink)
    {
        //
    }

    /**
     * Handle the ULink "force deleted" event.
     *
     * @param  \App\Models\ULink  $uLink
     * @return void
     */
    public function forceDeleted(ULink $uLink)
    {
        //
    }
}
