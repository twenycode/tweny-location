<?php

use TwenyCode\TwenyLocation\Components;


return [

    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below you reference all components that should be loaded for your app.
    | By default all components from Blade UI Kit are loaded in. You can
    | disable or overwrite any component class or alias that you want.
    |
    */

    'components' => [
        //  Buttons
        'location' => Components\LocationComponent::class,

    ],

    'table' => [
        'name'=>env('LOCATION_TABLE','locations')
    ]


];
