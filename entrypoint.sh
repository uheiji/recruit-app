#!/bin/bash

# MySQLが準備できるのを待つ
until nc -z -v -w30 db 3306
do
  echo "Waiting for database connection..."
  sleep 5
done

# Laravelのマイグレーションとシーディングを実行
php artisan migrate --force
php artisan db:seed --force

# PHP-FPMを起動
php-fpm
