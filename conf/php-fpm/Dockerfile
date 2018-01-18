FROM php:7.2-fpm
WORKDIR "/application"

RUN docker-php-ext-install mysqli

# Add sudo in order to run wp-cli as the www-data user 
RUN apt-get update && apt-get install -y sudo less

# Add WP-CLI 
RUN curl  -o /bin/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
COPY wp-cli-user.sh /usr/local/bin/wp
RUN chmod +x /usr/local/bin/wp
RUN chmod +x /bin/wp-cli.phar

# Cleanup
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN wp --info