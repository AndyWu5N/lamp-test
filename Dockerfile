FROM ubuntu:16.04

COPY startup.sh /

RUN apt-get -y update
RUN apt-get -y install apache2 curl net-tools git php php-mysql php-gd php-curl php-json php-cgi php-fpm libapache2-mod-php
RUN apt-get -y upgrade
RUN a2enmod rewrite
RUN a2enmod php7.0
RUN cd /var/www/html/ && git clone https://github.com/AndyWu5N/lamp-test.git

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

CMD cd / && ./startup.sh
