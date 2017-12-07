FROM php:fpm

MAINTAINER lustre <firelustre@163.com>

RUN pecl install redis \
    && docker-php-ext-install pdo_mysql mysqli \
    && docker-php-ext-enable redis
