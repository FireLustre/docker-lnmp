FROM php:7.1-fpm

MAINTAINER lustre <firelustre@163.com>

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
    && docker-php-ext-install iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && docker-php-ext-enable gd

RUN pecl install redis \
    && docker-php-ext-install pdo_mysql mysqli zip \
    && docker-php-ext-enable redis
