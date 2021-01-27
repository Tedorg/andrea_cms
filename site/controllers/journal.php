<?php

return function ($page, $site) {

    // get all articles
    $projects = $page->children();
    $home     = $site->page('home');

    return [
        'projects' => $projects,
        'home'     => $home,

    ];

};
