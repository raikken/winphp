sudo docker run -d -v $(pwd):/root/winphp:rw --name winphp-php-fpm winphp-php-fpm /usr/sbin/php-fpm7.0 -F -y /root/winphp/php-fpm.conf
sudo docker run -d -v $(pwd):/root/winphp:rw -v $(pwd)/nginxlog:/var/log/nginx --name winphp-nginx -p 8888:8888 --link winphp-php-fpm:php-fpm.server winphp-nginx /usr/sbin/nginx -c /root/winphp/nginx.conf -g "daemon off;" 
