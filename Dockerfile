# Gunakan image PHP dengan Apache dan ekstensi Laravel
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy semua file ke container
COPY . /var/www/html

# Hapus default index.html Apache
RUN rm -f /var/www/html/index.html

# Berikan izin ke Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Install dependencies Laravel
RUN composer install --no-interaction --optimize-autoloader

# Expose port 80
EXPOSE 80
