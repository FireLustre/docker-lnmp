FROM php:fpm

MAINTAINER lustre <firelustre@163.com>

RUN pecl install redis \
    && docker-php-ext-enable redis
