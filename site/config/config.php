<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug'   => true,
    'cache'   => [
        'pages' => [
            'active' => false,
            'ignore' => function ($page) {
                return $page->title()->value() === 'Do not cache me';
            },
        ],
    ],

    "thumbs"  => [
        "srcsets" => [
            "default"     => [320, 1200],
            "breakpoints" => [576, 768, 992, 1200],
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
