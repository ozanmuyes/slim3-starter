<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

// See http://php-di.org/doc/frameworks/slim.html#controller-parameters

/*$app->get('/hello/{name}', function (Request $request, Response $response, string $name) {
    $response->getBody()->write("Hello, $name");

    return $response;
});*/

$app->get('/hello/{name}', function (Request $request, Response $response, string $name, Twig $view) {
    return $view->render($response, 'hello.twig', [
        "name" => $name
    ]);
});
