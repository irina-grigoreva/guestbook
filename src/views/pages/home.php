<?php

use app\controllers\HelpersController;

$errors = is_array($errors ?? null) ? $errors : [];
$old = is_array($old ?? null) ? $old : [];
$entries = is_array($entries ?? null) ? $entries : [];
$generalError = $errors['csrf'] ?? $errors['spam'] ?? $errors['database'] ?? null;
?>
<section class="hero">
    <div class="container hero__grid">
        <div>
            <p class="eyebrow">Production-like portfolio demo</p>
            <h1>Guestbook</h1>
            <p class="hero__copy">
                A Dockerized PHP application demonstrating form handling, validation,
                MySQL persistence, output escaping, CSRF protection, and clean backend structure.
            </p>
        </div>
        <div class="stats" aria-label="Project highlights">
            <span>PDO prepared statements</span>
            <span>CSRF + honeypot</span>
            <span>PHPStan + PSR-12</span>
        </div>
    </div>
</section>

<section class="app-shell">
    <div class="container app-grid">
        <form class="guestbook-form" method="post" action="/post/handle" novalidate>
            <div class="form-header">
                <h2>Leave a message</h2>
                <p>Your email is optional and is never shown publicly in this demo.</p>
            </div>

            <?php if (!empty($success)) : ?>
                <div class="notice notice--success" role="status">
                    <?= HelpersController::escape((string) $success); ?>
                </div>
            <?php endif; ?>

            <?php if ($generalError !== null) : ?>
                <div class="notice notice--error" role="alert">
                    <?= HelpersController::escape((string) $generalError); ?>
                </div>
            <?php endif; ?>

            <input type="hidden" name="csrf_token" value="<?= HelpersController::escape((string) $csrfToken); ?>">
            <div class="honeypot" aria-hidden="true">
                <label for="website">Website</label>
                <input id="website" type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="field">
                <label for="name">Name</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    maxlength="80"
                    value="<?= HelpersController::old('name', $old); ?>"
                    <?php if (isset($errors['name'])) : ?>aria-describedby="name-error"<?php endif; ?>
                    required
                >
                <?php if (isset($errors['name'])) : ?>
                    <p class="field-error" id="name-error"><?= HelpersController::escape($errors['name']); ?></p>
                <?php endif; ?>
            </div>

            <div class="field">
                <label for="email">Email <span>optional</span></label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    maxlength="120"
                    value="<?= HelpersController::old('email', $old); ?>"
                    <?php if (isset($errors['email'])) : ?>aria-describedby="email-error"<?php endif; ?>
                >
                <?php if (isset($errors['email'])) : ?>
                    <p class="field-error" id="email-error"><?= HelpersController::escape($errors['email']); ?></p>
                <?php endif; ?>
            </div>

            <div class="field">
                <label for="message">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="7"
                    maxlength="1000"
                    <?php if (isset($errors['message'])) : ?>aria-describedby="message-error"<?php endif; ?>
                    required
                ><?= HelpersController::old('message', $old); ?></textarea>
                <?php if (isset($errors['message'])) : ?>
                    <p class="field-error" id="message-error"><?= HelpersController::escape($errors['message']); ?></p>
                <?php endif; ?>
            </div>

            <button class="button" type="submit">Post message</button>
        </form>

        <section class="entries" aria-labelledby="entries-title">
            <div class="entries__header">
                <div>
                    <h2 id="entries-title">Latest messages</h2>
                    <p><?= count($entries); ?> demo entries loaded from MySQL</p>
                </div>
            </div>

            <?php if (!empty($databaseError)) : ?>
                <div class="notice notice--error" role="alert">
                    <?= HelpersController::escape((string) $databaseError); ?>
                </div>
            <?php elseif ($entries === []) : ?>
                <div class="empty-state">No messages yet. Be the first to sign the guestbook.</div>
            <?php else : ?>
                <div class="entry-list">
                    <?php foreach ($entries as $entry) : ?>
                        <?php $this->getPart('parts/article', ['entry' => $entry]); ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </div>
</section>
