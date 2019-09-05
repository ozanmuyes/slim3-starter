<?php

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

return [
    // -----------------------------------------------------------------------------
    // Service providers
    // -----------------------------------------------------------------------------

    Twig::class => function (ContainerInterface $c) {
        $settings = $c->get('settings.view');

        $view = new Slim\Views\Twig($settings['template_path'], $settings['twig']);

        // Add extensions
        $view->addExtension(new Slim\Views\TwigExtension(
            $c->get('router'),
            $c->get('request')->getUri()
        ));
        $view->addExtension(new Twig_Extension_Debug());

        return $view;
    },

    // -----------------------------------------------------------------------------
    // Service factories
    // -----------------------------------------------------------------------------

    /*'logger' => function (ContainerInterface $c) {
        $settings = $c->get('settings.logger');

        $logger = new Monolog\Logger($settings['name']);

        $logger->pushProcessor(new Monolog\Processor\UidProcessor());
        $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));

        return $logger;
    },*/

    // -----------------------------------------------------------------------------
    // Action factories
    // -----------------------------------------------------------------------------

    /*App\Action\HomeAction::class => function (ContainerInterface $c) {
        return new App\Action\HomeAction($c->get('view'), $c->get('logger'));
    },*/
];
