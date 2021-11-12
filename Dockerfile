FROM prestashop/prestashop:1.7.8.0-7.1-apache

RUN a2enmod ssl

EXPOSE 80
EXPOSE 443

RUN service apache2 restart
