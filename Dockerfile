FROM php:7.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN docker-php-ext-install mysqli

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
