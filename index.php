<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/config/init.php';

$router = new AltoRouter();
require_once CONFIG . '/routes.php';

new \core\App();

