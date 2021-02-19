<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'routes'  => [
        [
            'pattern' => '',
            'action'  => function () {
                return page('journal');
            },
        ],
        [
            'pattern' => 'my/second/url',
            'action'  => function () {
                // ...
            },
        ],
    ],
    'debug'   => false,
    'cache'   => [
        'pages' => [
            'active' => true,
        ],
    ],

    "thumbs"  => [

        "srcsets" => [
            'cover'       => [
                '400w'  => ['width' => 200, 'quality' => 80],
                '600w'  => ['width' => 300, 'quality' => 80],
                '800w'  => ['width' => 400, 'quality' => 80],
                '1200w' => ['width' => 500, 'quality' => 80],
            ],
            "default"     => [320, 1200],
            "breakpoints" => [576, 768, 992, 1200],
        ],
        'presets' => [
            'default' => ['width' => 400, 'quality' => 80],
            'blurred' => ['blur' => false],
        ],

    ],
    'session' => [
        'durationNormal' => 7200, // default: 2 hours
        'durationLong'   => 1209600, // default: 2 weeks
        'timeout'        => 1800, // default: half an hour
        'cookieName'     => 'kirby_session',
        'gcInterval'     => 100, // default: cleanup every ~100 requests
    ],
];
