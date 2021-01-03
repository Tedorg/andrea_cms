<?php

return function ($page) {

    // get all articles
    $projects = $page->children();

    return [
        'projects' => $projects,

    ];

};
