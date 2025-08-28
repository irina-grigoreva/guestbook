<section class="contact-section">
    <div class="container" style="min-height: 55vh;">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Добавить запись</h2>
            </div>
            <div class="col-lg-12">
                <h4 id="success" class="text-success"></h4>
                <h4 id="error" class="text-danger"></h4>
            </div>
            <div class="col-lg-12">
                <form class="form-contact contact_form" method="post" id="postForm" action="/app/post/handle" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Текст записи'" placeholder="Текст записи"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите свое имя'" placeholder="Имя">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите email'" placeholder="Email">
                            </div>
                        </div>
                        <input type="hidden" name="csrf_token" value="<?php
                                                                        session_start();
                        if (empty($_SESSION['csrf_token'])) {
                            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                        }
                                                                        echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8');
                        ?>">
                        <input type="text" name="website" value="" style="position:absolute;left:-9999px;opacity:0;" tabindex="-1" autocomplete="off">

                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
