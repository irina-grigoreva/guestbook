<?php

$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;

$sortEmail = app\controllers\HelpersController::normDir($_GET['sort_email'] ?? null, 'ASC');
$sortName  = app\controllers\HelpersController::normDir($_GET['sort_name']  ?? null, 'ASC');
$sortDate  = app\controllers\HelpersController::normDir($_GET['sort_date']  ?? null, 'DESC');

$prevPage = max(0, $page - 1);
$nextPage = $page + 1;
?>

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <?php if ($prevPage > 0) : ?>
            <li class="page-item">
                <a href="<?php echo app\controllers\HelpersController::urlWith(['page' => $prevPage]); ?>" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $pages; $i++) :
            $rule = false;

            if (isset($_GET['page']) && $i === (int) $_GET['page']) {
                $rule = true;
            } elseif (! isset($_GET['page']) && 0 === $i) {
                $rule = true;
            }

            ?>
            <li class="page-item<?php if ($rule) {
                                    echo ' active';
                                } ?>">
                <a href="<?php echo app\controllers\HelpersController::urlWith(['page' => $i]); ?>" class="page-link"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>
        <?php if ($nextPage <= $pages) : ?>
            <li class="page-item">
                <a href="<?php echo app\controllers\HelpersController::urlWith(['page' => $nextPage]); ?>" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
