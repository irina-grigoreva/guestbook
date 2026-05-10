<?php

use app\controllers\HelpersController;

$entry = is_array($entry ?? null) ? $entry : [];
$createdAt = isset($entry['created_at']) ? strtotime((string) $entry['created_at']) : false;
$date = $createdAt ? date('M j, Y H:i', $createdAt) : '';
?>
<article class="entry-card">
    <div class="entry-card__header">
        <h3><?= HelpersController::escape((string) ($entry['username'] ?? 'Guest')); ?></h3>
        <time datetime="<?= HelpersController::escape((string) ($entry['created_at'] ?? '')); ?>">
            <?= HelpersController::escape($date); ?>
        </time>
    </div>
    <p><?= nl2br(HelpersController::escape((string) ($entry['message'] ?? ''))); ?></p>
</article>
