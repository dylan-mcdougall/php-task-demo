FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

WORKDIR /php-task-demo

RUN ls -la

COPY . .

EXPOSE 80

CMD ["apache2-foreground"]
