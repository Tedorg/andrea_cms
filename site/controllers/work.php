<?php

return function ($kirby, $page, $site) {

    // get all articles
    $projects = $page->children();
    $headline = $projects->headline();
    $session  = $kirby->session();
    $home     = $site->page('home');

    return [
        'projects' => $projects,
        'session'  => $session,
        'headline' => $headline,
        'home'     => $home,
    ];

};
