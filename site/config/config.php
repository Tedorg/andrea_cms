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
            'active' => false,
        ],
    ],

    "thumbs"  => [

        'srcsets' => [
            'default'      => [300, 600, 800, 1024],
            'cover'        => [100, 200, 300],
            'app'          => [
                '400w'  => ['width' => 400, 'quality' => 80],
                '560w'  => ['width' => 560, 'quality' => 80],
                '800w'  => ['width' => 800, 'quality' => 80],
                '1024w' => ['width' => 1024, 'quality' => 100],
                '1440w' => ['width' => 1440, 'quality' => 100],
                '2048w' => ['width' => 2048, 'quality' => 100],
            ],
            'low_qualitiy' => [
                '400w'  => ['width' => 400, 'quality' => 10],
                '560w'  => ['width' => 560, 'quality' => 10],
                '800w'  => ['width' => 800, 'quality' => 10],
                '1024w' => ['width' => 1024, 'quality' => 10],
                '1440w' => ['width' => 1440, 'quality' => 10],
                '2048w' => ['width' => 2048, 'quality' => 10],
            ],
            'index'        => [576, 768, 992, 1440, 1920, 2048],

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
