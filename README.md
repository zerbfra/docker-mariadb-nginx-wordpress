# Docker compose: nginx + mariadb + php-fpm + wordpress

This is a docker compose with official images from docker.
It provides nginx instead of apache.

In particular, data will be stored in the "data" directory:
    - wp-config.php and wp-content in the wordpress directory
    - mysql data in the mysql dir

You can configure most of the nginx/php-fpm settings in the conf directory
There is also a cloudflare.conf file to pass the user ip to host