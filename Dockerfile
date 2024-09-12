FROM php:8.3-fpm

WORKDIR /recruit-app

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /recruit-app

RUN composer install --optimize-autoloader

RUN chown -R www-data:www-data /recruit-app/storage /recruit-app/bootstrap/cache

CMD ["php-fpm"]
