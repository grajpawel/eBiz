FROM prestashop/prestashop:1.7.8.0-7.1-apache

RUN rm -rf *

COPY shop-data/ ./

RUN chown -R www-data:root ./

COPY ssl/ /etc/apache2/sites-available

RUN a2enmod ssl

EXPOSE 80
EXPOSE 443

RUN service apache2 restart
