FROM php:7.4-apache
RUN pecl install redis-5.1.1 \
    && pecl install xdebug-2.8.1 \
    && docker-php-ext-enable redis xdebug
RUN docker-php-ext-install mysqli