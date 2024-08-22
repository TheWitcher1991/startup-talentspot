FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \

WORKDIR /var/www/html

COPY ./build /var/www/html

COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
EXPOSE 443

CMD ["sh", "-c", "nginx && php-fpm"]