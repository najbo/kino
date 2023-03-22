<?php

namespace Digart\Kino;

use DigArt\Kino\Models\Settings;
use DigArt\Kino\Models\Show;
use Route;

Route::get('myroute', function () {

    $shows = Show::with('movie')
        ->isOnFrontend()
        ->nextShows()
        ->orderBy('starts_at')
        ->get();
    

    return $shows;
});
