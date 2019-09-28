<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class GlobalComposer
{
    public function compose(View $view)
    {
        $view->with('logged_in_user', auth()->user());
    }
}
