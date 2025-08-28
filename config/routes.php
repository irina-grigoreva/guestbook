<?php

use app\controllers\TemplateLoader;

$router->map('GET',  '/admin/logout',    'AdminController#logout');
$router->map('GET',  '/admin',           'AdminController#dashboard');

$router->map('POST', '/post/handle', 'PostFormHandler#handle');
$router->map('DELETE', '/post/handle', 'PostFormHandler#delete');

$router->map('GET', '/posts/[i:id]', 'PageController#viewAction');
$router->map('GET', '/[a:page]', 'PageController#simplePage');
$router->map('GET', '/', 'PageController#indexAction');

$match = $router->match();

try {

    if ($match) {
        if (is_string($match['target'])) {
            // Разделяем target на класс и метод
            list($controller, $method) = explode('#', $match['target']);

            // Добавляем namespace, если есть
            $controller = 'app\controllers\\' . $controller;

            // Создаем объект контроллера
            $controllerObject = new $controller();

            // Вызываем метод, передаем параметры
            call_user_func_array([$controllerObject, $method], $match['params']);
        } elseif (is_callable($match['target'])) {
            // Если target — анонимная функция
            call_user_func_array($match['target'], $match['params']);
        }
    } else {
        throw new \Exception("Страница не найдена", 404);
    }

} catch (\Exception $e) {
    if ($e->getCode() === 404) {
        http_response_code(404);

        $tpl = new TemplateLoader(APP);
        $tpl->render('default', 'error/404', [
            'title' => 'Страница не найдена... ',
            'message' => $e->getMessage(),
        ]);
    } else {
        http_response_code(500);
        echo "Произошла ошибка: " . $e->getMessage();
    }
}