FROM php:8.3-fpm
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini