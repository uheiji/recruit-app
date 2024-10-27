FROM php:8.3-fpm

WORKDIR /recruit-app

# 必要なパッケージのインストール
RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    curl \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    netcat-openbsd \
    nodejs \
    npm && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# アプリケーションファイルのコピー
COPY . /recruit-app

# entrypoint.shをコピー
COPY ./entrypoint.sh /usr/local/bin/entrypoint.sh

# composer install
RUN composer install --optimize-autoloader

# NPMパッケージとビルド
RUN npm install && npm run build

# ファイルの権限設定
RUN chown -R www-data:www-data /recruit-app/storage /recruit-app/bootstrap/cache

# entrypoint.shに実行権限を付与
RUN chmod +x /usr/local/bin/entrypoint.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

CMD ["php-fpm"]
