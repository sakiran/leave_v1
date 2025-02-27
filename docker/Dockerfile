# PHP + Apache
FROM php:8.1.19-apache-bullseye
WORKDIR /var/www/html/
# Update OS and install common dev tools
RUN apt-get update
RUN apt-get install -y wget vim git zip unzip zlib1g-dev libzip-dev libpng-dev

RUN docker-php-ext-install mysqli pdo_mysql gd zip pcntl exif 
RUN docker-php-ext-install mysqli 
RUN docker-php-ext-enable mysqli

# Enable common Apache modules
RUN a2enmod headers expires rewrite

# XDEBUG
# Docker file installs Xdebug extension with pecl command
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
# This needs in order to run xdebug from VSCode
ENV PHP_IDE_CONFIG 'serverName=DockerApp'

# Install Composer (Currently not used , hence commenting)
# COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

# Set working directory to web files
WORKDIR /var/www/html

RUN apachectl restart

#docker image build --no-cache -f docker/Dockerfile -t dlamp .

EXPOSE 80 443
#open ports 80 and 443