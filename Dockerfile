FROM php:8.2-apache

# Install system tools
RUN apt-get update && apt-get install -y unzip curl git

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP extensions
RUN docker-php-ext-install mysqli

# Copy project files
COPY . /var/www/html/

WORKDIR /var/www/html

# Install dependencies (THIS CREATES vendor/)
RUN composer install --no-interaction --prefer-dist

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
