FROM php:7.3.29-fpm
LABEL author="Fiddy|Fajar|Arfan"
LABEL company="RSKIA SADEWA"
LABEL website="rskiasadewa.co.id"
RUN apt-get update && apt-get install -y curl
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql

# RUN apt-get update \
#     && apt-get install -y \
#         libonig-dev \
#         libxml2-dev \
#         unzip \
#         && docker-php-ext-install \
#             mysqli \
#             pdo \
#             pdo_mysql \
#             mbstring \
#             exif \
#             pcntl \
#             bcmath \
#             opcache \
#             tokenizer \
#             xml \
#             ctype \

# COPY php.ini /usr/local/etc/php/

# Menentukan direktori kerja
# WORKDIR /var/www/html