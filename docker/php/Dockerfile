FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libonig-dev unzip \
    && docker-php-ext-install mbstring pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --prefer-dist --no-progress --no-interaction --no-dev

RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf \
    && printf '<Directory /var/www/html>\n\
    Options FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    DirectoryIndex index.php index.html\n\
    </Directory>\n' > /etc/apache2/conf-available/zz-guestbook.conf \
    && a2enconf zz-guestbook

RUN { \
    echo 'display_errors=Off'; \
    echo 'display_startup_errors=Off'; \
    echo 'log_errors=On'; \
    echo 'error_reporting=E_ALL'; \
    } > /usr/local/etc/php/conf.d/app.ini
