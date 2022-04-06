FROM php:8.1-cli
COPY . /app
WORKDIR /app
RUN apt-get update
RUN apt-get install libzip-dev -y
RUN docker-php-ext-install zip
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer install



