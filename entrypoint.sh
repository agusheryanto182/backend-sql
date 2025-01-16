#!/bin/sh

if [ ! -d "vendor" ]; then
  echo "Vendor directory does not exist. Running composer install..."
  composer install --no-dev --optimize-autoloader
fi

php artisan migrate

php artisan serve --host=0.0.0.0 --port=3002