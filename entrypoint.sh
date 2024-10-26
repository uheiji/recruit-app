#!/bin/bash

# MySQLが準備できるのを待つ
until nc -z -v -w30 db 3306
do
  echo "Waiting for database connection..."
  sleep 5
done

# Composerで依存関係をインストール
echo "Running composer install..."
composer install --optimize-autoloader
if [ $? -ne 0 ]; then
  echo "Composer install failed"
  exit 1
fi


# npmでフロントエンド依存関係をインストール
echo "Running npm install..."
npm install
if [ $? -ne 0 ]; then
  echo "npm install failed"
  exit 1
fi

# npmでアセットのビルドを実行
echo "Running npm run build..."
npm run build
if [ $? -ne 0 ]; then
  echo "npm run build failed"
  exit 1
fi

# Laravelのマイグレーションとシーディングを実行
echo "Running migrations and seeding..."
php artisan migrate --force
if [ $? -ne 0 ]; then
  echo "Migrations failed"
  exit 1
fi

php artisan db:seed --force
if [ $? -ne 0 ]; then
  echo "Seeding failed"
  exit 1
fi

# PHP-FPMを起動
echo "Starting PHP-FPM..."
exec php-fpm
