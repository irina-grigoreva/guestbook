<?php

use app\controllers\HelpersController;

$pageTitle = isset($title) ? HelpersController::escape((string) $title) : 'Guestbook';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dockerized PHP guestbook demo with validation and MySQL persistence.">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="/assets/css/guestbook.css">
</head>
<body>
<header class="site-header">
    <div class="site-header__inner">
        <a class="brand" href="/" aria-label="Guestbook home">Guestbook</a>
        <span class="site-header__meta">PHP + MySQL + Docker</span>
    </div>
</header>
