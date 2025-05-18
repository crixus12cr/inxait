#!/bin/sh
until nc -z -v -w30 $DB_HOST $DB_PORT
do
  echo "Esperando a que la base de datos esté lista..."
  sleep 5
done
php artisan migrate --force
php artisan serve --host=0.0.0.0 --port=$PORT
