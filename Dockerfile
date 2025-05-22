FROM php:8.2-fpm

# Install system dependencies and pdo_mysql extension
RUN docker-php-ext-install pdo_mysql

# (Optional) Install other extensions or tools here

WORKDIR /app
