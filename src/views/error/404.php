<?php

use app\controllers\HelpersController;
?>
<section class="app-shell">
    <div class="container">
        <div class="empty-state">
            <h1><?= HelpersController::escape((string) ($title ?? 'Not found')); ?></h1>
            <p><?= HelpersController::escape((string) ($message ?? 'The page could not be displayed.')); ?></p>
            <a class="button button--link" href="/">Back to guestbook</a>
        </div>
    </div>
</section>
