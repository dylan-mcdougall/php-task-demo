FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

RUN ls -la

COPY . .

EXPOSE 80

CMD ["apache2-foreground"]
