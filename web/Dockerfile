 FROM php:apache

WORKDIR /var/www/html
COPY . .
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli


