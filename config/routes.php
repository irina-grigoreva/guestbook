<?php

declare(strict_types=1);

use app\controllers\TemplateLoader;

$router->map('POST', '/post/handle', 'PostFormHandler#handle');
$router->map('GET', '/', 'PageController#indexAction');

$match = $router->match();

try {
    if (!$match) {
        throw new RuntimeException('Page not found', 404);
    }

    if (is_string($match['target'])) {
        [$controller, $method] = explode('#', $match['target']);
        $controllerClass = 'app\controllers\\' . $controller;
        $controllerObject = new $controllerClass();

        call_user_func_array([$controllerObject, $method], $match['params']);
        return;
    }

    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    }
} catch (Throwable $e) {
    if ($e->getCode() !== 404) {
        error_log($e->getMessage());
    }

    http_response_code($e->getCode() === 404 ? 404 : 500);

    $tpl = new TemplateLoader(APP);
    $tpl->render('default', 'error/404', [
        'title' => $e->getCode() === 404 ? 'Page not found' : 'Application error',
        'message' => $e->getCode() === 404
            ? 'The requested page could not be found.'
            : 'Something went wrong. Please try again later.',
    ]);
}
