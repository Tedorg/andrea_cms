<?php

return function ($kirby, $page, $site) {

    // get all articles
    $projects = $page->children();
    $headline = $page->headline();
    $text     = $page->text();
    $session  = $kirby->session();
    $home     = $site->page('home');

    return [
        'projects'    => $projects,
        'session'     => $session,
        'button_text' => $headline,
        'mail_text'   => $text,
        'home'        => $home,
    ];

};
