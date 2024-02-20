FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

WORKDIR /var/www/html

COPY . /var/www/html

COPY ./classes /var/www/html/classes

COPY ./scripts /var/www/html/scripts

EXPOSE 80

CMD ["apache2-foreground"]
