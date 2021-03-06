<?php

    /**
     *
     * Piqo Entry Point
     *
     * http://github.com/micheg/piqo
     *
     * Setting Slim and application
     *
     * Copyright (c) 2012, Michelangelo Giacomelli
     * All rights reserved.
     * 
     * BSD Licensed.
     *
     */

    // Microframeworks: slim & underscore
    // note this is my generic app template
    // not sure using underscore in this project
    require_once '../vendor/Slim/Slim.php';
    require_once '../vendor/underscore.php';
    require_once '../vendor/idiorm.php';
    require_once '../vendor/my.php';
    require_once '../vendor/markdown.php';

    // custom setting
    $app = new Slim(array(
        'log.enable' => true,
        'log.path' => '../log',
        'log.level' => 4,
        'templates.path' => '../app/views',
        'connection.string' => 'sqlite:../data/url.sqlite',
        'service.name' => $_SERVER['SERVER_NAME'] . '/',
        'static_page.path' => '../app/views/static',
    ));

    // application routes
    require_once '../app/routes/urls.php';
    require_once '../app/routes/admin.php';
    require_once '../app/routes/static.php';

    // run app!
    $app->run();
?>