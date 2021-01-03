<?php

return function ($kirby, $page) {

    // get all articles
    $projects = $page->children();
    $session  = $kirby->session();

    return [
        'projects' => $projects,
        'session'  => $session,
    ];

};
