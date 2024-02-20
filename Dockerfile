FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

RUN ls -la

COPY . /var/www/html

COPY ./classes /var/www/html/classes

COPY ./scripts /var/www/html/scripts

EXPOSE 80

CMD ["apache2-foreground"]
