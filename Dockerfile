FROM php:8.1-apache

RUN apt-get update && apt-get upgrade -y
RUN apt-get install sudo unzip wget -y
RUN docker-php-ext-install mysqli
RUN cd ~
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN HASH=`curl -sS https://composer.github.io/installer.sig`
RUN php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
 
RUN a2enmod rewrite
RUN a2enmod ssl
RUN service apache2 restart
 
EXPOSE 80