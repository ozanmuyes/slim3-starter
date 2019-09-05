<?php

// NOTE As of now we MUST do as below - return an assoc. array where all keys starts with 'settings.'
//      See http://php-di.org/doc/frameworks/slim.html#configuring-slim
//      Also see 'vendor/php-di/slim-bridge/src/config.php'

return [
    // Slim Settings
    'settings.httpVersion' => '1.1',
    'settings.responseChunkSize' => 4096,
    'settings.outputBuffering' => 'append',
    'settings.determineRouteBeforeAppMiddleware' => false,
    'settings.displayErrorDetails' => true,
    'settings.addContentLengthHeader' => true,
    'settings.routerCacheFile' => false,

    // View settings
    // NOTE Get this by `$c->get('settings.view');`
    'settings.view' => [
        'template_path' => __DIR__ . '/templates',
        'twig' => [
            'cache' => __DIR__ . '/../cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ],
    ],

    // monolog settings
    /*'settings.logger' => [
        'name' => 'app',
        'path' => __DIR__ . '/../log/app.log',
    ],*/
];
