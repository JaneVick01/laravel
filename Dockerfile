FROM php:8.2-apache
RUN apt update && apt install -y zip git unzip
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN composer install
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite
RUN docker-php-ext-install pdo_mysql
RUN service apache2 restart