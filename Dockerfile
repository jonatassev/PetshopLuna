FROM php:8-apache

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY composer.json composer.json
RUN apt-get update && apt-get install zip unzip 
RUN composer install
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80