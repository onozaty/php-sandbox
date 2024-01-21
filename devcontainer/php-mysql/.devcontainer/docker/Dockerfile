FROM php:8-apache

WORKDIR /var/www/html

RUN apt-get update \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY ./docker/php.ini-development /usr/local/etc/php/php.ini
COPY ./docker/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
