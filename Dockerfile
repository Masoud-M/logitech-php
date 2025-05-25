FROM php:8.2-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev && \
    docker-php-ext-install pdo_mysql mbstring zip

RUN a2enmod rewrite

COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY . .

EXPOSE 80

CMD ["apache2-foreground"]