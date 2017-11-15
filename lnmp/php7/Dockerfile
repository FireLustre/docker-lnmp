FROM php:fpm

MAINTAINER lustre <firelustre@163.com>

RUN apt-get update && apt-get install -y libpng12-dev libjpeg-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd pdo_mysql zip opcache