# Testrunner for PHP Behat Projects

FROM php:7.4

MAINTAINER John Behrens version: 0.1

RUN apt-get update -yqq
RUN apt-get install git -yqq

# mysql driver for docker
RUN docker-php-ext-install pdo_mysql
   

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
