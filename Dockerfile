# Set the base image
FROM php:8-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the application files to the container
COPY . /var/www/html

# Install dependencies and enable necessary PHP extensions
RUN apt-get update && \
    apt-get install -y zip unzip git libonig-dev libxml2-dev && \
    docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath opcache && \
    a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

ARG _APP_KEY
ENV APP_KEY {_APP_KEY}

# Generate the Laravel application key
RUN php artisan key:generate

# Set the ownership and permissions for Laravel directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose the container port
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]