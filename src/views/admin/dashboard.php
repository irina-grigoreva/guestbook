<?php $this->getPart('parts/banner', ['title' => 'Привет, Админ!']); ?>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 mb-5 mb-lg-0 mx-auto">
                <h2 class="pb-3"><a href="/app/admin/logout" class="boxed-btn btn btn-info">Выйти</a></h2>
            </div>
        </div>
        <form method="GET" class="row mb-5">
            <div class="col-3 mb-5 mb-lg-0 mx-auto">
                <select name="sort_date" class="form-select p-1" aria-label="Сортировка по дате">
                    <option value="">Сортировка по дате</option>
                    <option value="desc" <?= isset($_GET['sort_date']) && $_GET['sort_date'] === 'desc' ? 'selected' : '' ?>>DESC</option>
                    <option value="asc" <?= isset($_GET['sort_date']) && $_GET['sort_date'] === 'asc' ? 'selected' : '' ?>>ASC</option>
                </select>
            </div>
            <div class="col-3 mb-5 mb-lg-0 mx-auto">
                <select name="sort_name" class="form-select p-1" aria-label="Сортировка по имени">
                    <option value="">Сортировка по имени</option>
                    <option value="desc" <?= isset($_GET['sort_name']) && $_GET['sort_name'] === 'desc' ? 'selected' : '' ?>>DESC</option>
                    <option value="asc" <?= isset($_GET['sort_name']) && $_GET['sort_name'] === 'asc' ? 'selected' : '' ?>>ASC</option>
                </select>
            </div>
            <div class="col-3 mb-5 mb-lg-0 mx-auto">
                <select name="sort_email" class="form-select p-1" aria-label="Сортировка по e-mail">
                    <option value="">Сортировка по e-mail</option>
                    <option value="desc" <?= isset($_GET['sort_email']) && $_GET['sort_email'] === 'desc' ? 'selected' : '' ?>>DESC</option>
                    <option value="asc" <?= isset($_GET['sort_email']) && $_GET['sort_email'] === 'asc' ? 'selected' : '' ?>>ASC</option>
                </select>
            </div>

            <div class="col-3 mb-5 mb-lg-0">
                <button type="submit" class="btn btn-primary w-100">Применить</button>
            </div>
        </form>
        <div class="row">
            <div class="col-12 mb-5 mb-lg-0 mx-auto">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">Удалить</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Автор</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Название</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['posts'] as $row) {
                            $this->getPart('parts/article', $row, true);
                        }
                        ?>
                    </tbody>
                </table>

                <?php $this->getPart('parts/pagination', $data['meta']); ?>

            </div>
        </div>
    </div>
</section>