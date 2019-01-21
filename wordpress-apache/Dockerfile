FROM wordpress:4.9.8-apache
RUN chown -R www-data:www-data /var/www
RUN find /var/www/ -type d -exec chmod 0755 {} \;
RUN find /var/www/ -type f -exec chmod 644 {} \;
RUN mkdir /var/www/html/wp-content/plugins; exit 0
RUN mkdir /var/www/html/wp-content/uploads; exit 0

