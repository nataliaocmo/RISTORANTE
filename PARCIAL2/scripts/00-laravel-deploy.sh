#!/usr/bin/env bash 
echo "Running composer" 
composer global require hirak/prestissimo 
composer install --no-dev --working-dir=/var/www/html 
echo "generating application key..." 
php artisan key:generate --show 
echo "Caching config..." 
 
 
Finally, create a folder from the root directory and create a 
file in it and copy the following into it 
 
 
 
location ~ \.php$ { 
fastcgi_split_path_info ^(.+\.php)(/.+)$; 
fastcgi_pass unix:/var/run/php-fpm.sock; 
fastcgi_index index.php; 
fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; 
fastcgi_param SCRIPT_NAME $fastcgi_script_name; 
include fastcgi_params; 
} 
 
 
# deny access to . files 
location ~ /\. { 
log_not_found off; 
deny all; 
} 
 
 
location ~ /\.(?!well-known).* { 
deny all; 
} 
} 
00-laravel- 
deploy.sh 
php artisan config:cache 
echo "Caching routes..." 
php artisan route:cache 
echo "Running migrations..." 
php artisan migrate --force 