FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    curl-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    bash \
    && docker-php-ext-install -j$(nproc) bcmath \
    && docker-php-ext-install -j$(nproc) curl \
    && docker-php-ext-install -j$(nproc) gd \
    # && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install -j$(nproc) zip
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
RUN docker-php-ext-install curl
RUN docker-php-ext-install exif

RUN apk add php-curl \
    php-openssl \
    php-zip \ 
    php-phar \
    php-xml \
    php-pdo \
    php-tokenizer \
    php-dom \
    php-fileinfo \
    php-xmlwriter \
    php-common \
    php-cli \
    php-exif \
    php-session 
RUN apk add php-mbstring \
    php-curl \
    php-openssl \
    php-zip \ 
    php-phar \
    php-xml \
    php-pdo \
    php-tokenizer \
    php-dom \
    php-fileinfo \
    php-xmlwriter \
    php-common \
    php-cli \
    php-session 
# RUN docker-php-ext-install mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apk add libpng \
    libjpeg \
    libmcrypt \
    libgd \
    jpegoptim optipng pngquant gifsicle \
    libxml2 \
    unzip 
RUN apk add --no-cache freetype-dev libjpeg-turbo-dev libpng-dev libzip-dev zlib-dev
RUN apk add composer

# RUN apk add php-mysql 
    
# RUN apk add php-pdo-mysql \
#     php-pdo-oci \
#     php-pdo-odbc \
#     php-pdo-pgsql \
#     php-pdo-sqlite 


RUN apk add nano
COPY php.ini /usr/local/etc/php/php.ini
WORKDIR /var/www/html
ADD . /var/www/html
RUN chown -R www-data:www-data /var/www/html
# RUN chmod -R 755 /var/www/html/storage
RUN ls
