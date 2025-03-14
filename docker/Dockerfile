FROM php:8.4-apache

COPY library.api.conf /etc/apache2/sites-available/

RUN a2ensite library.api && a2enmod rewrite


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer


RUN apt-get update && apt-get install -y \
    git \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    libjpeg-dev \
    zlib1g-dev \
    libgd-dev \
    libfreetype6-dev \
    cron \
    wget \
    gnupg

RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/

RUN docker-php-ext-install \
    pdo_mysql \
    mysqli \
    zip \
    gd \
    exif

ENV APACHE_RUN_USER library
RUN useradd -d /var/www --uid=1000 --group=www-data -s /sbin/nologin library

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

