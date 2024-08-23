FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    curl \
    nginx \
    supervisor \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY ./deploy/php.ini /usr/local/etc/php/php.ini

COPY ./build /var/www/html

COPY ./deploy/nginx.conf /etc/nginx/nginx.conf

COPY ./deploy/conf.d /etc/nginx/conf.d/

COPY ./deploy/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN chmod +x /etc/supervisor/conf.d/supervisord.conf

RUN chown -R www-data:www-data /var/www/html

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]