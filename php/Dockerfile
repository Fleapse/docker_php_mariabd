FROM php:7.4.2-apache
WORKDIR /var/www/html
VOLUME ./www/
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN service apache2 restart
RUN apt-get update -qq \
    && apt-get install -qy --no-install-recommends \
        curl \
        zip \
        unzip \
        git
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer



