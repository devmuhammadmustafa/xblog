<?php

namespace App\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class ServiceComposer
{


    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('setting', Setting::first());
    }
}
