FROM php:5.6-fpm

MAINTAINER lustre <firelustre@163.com>

RUN pecl install redis \
    && docker-php-ext-install pdo_mysql mysqli \
    && docker-php-ext-enable redis
