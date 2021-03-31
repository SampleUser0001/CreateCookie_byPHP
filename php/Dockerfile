FROM php:8.0.3-fpm

RUN apt -y update && apt -y upgrade
RUN php -m

# RUN apt install -y composer
# RUN composer -V

COPY php.ini /usr/local/etc/php/
