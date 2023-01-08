<?php

namespace ArtMin96\FilamentPopover\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller;

class PopoverController extends Controller
{
    public function popover(Model $model): View
    {
        return view('user.popover', [
            'model' => $model,
        ]);
    }
}
