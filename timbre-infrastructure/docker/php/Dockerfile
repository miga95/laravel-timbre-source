FROM php:7.3-fpm

# install system dependencies
RUN apt-get -y update
RUN apt-get install -y --no-install-recommends \
    libmcrypt-dev \
    libpng-dev \
    zlib1g-dev \
    libzip-dev \
    libmagickwand-dev \
    openssl \
    zip unzip \
    git \
    nodejs \
    libldap2-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# install php dependencies
RUN pecl install mcrypt-1.0.2
RUN docker-php-ext-enable mcrypt

RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install pdo \
   mbstring \
   pdo_mysql \
   gd \
   zip \
   xml \
   ldap


# add crontab file
RUN apt-get update && apt-get install -y cron

#RUN  \
#    pecl install imagick \
#    && docker-php-ext-enable imagick \
#    docker-php-ext-install mcrypt pdo_mysql \
#    && docker-php-ext-install gd

# Install fake user Docaret
ARG DOCARET_UID=1000
RUN addgroup --gid 1000 docaret && \
    adduser --system --uid $DOCARET_UID --home /home/docaret --shell /bin/bash docaret

USER docaret

COPY app.ini /etc/php7/conf.d/app.ini

WORKDIR /usr/local/apache2/htdocs
ENV PHP_MEMORY_LIMIT=512M
CMD composer install --no-interaction
CMD php artisan key:generate
CMD php artisan migrate
CMD php artisan ide-helper:generate

#RUN php artisan key:generate

#CMD php artisan serve --host=0.0.0.0 --port=8181

#ENTRYPOINT composer install

EXPOSE 9000
CMD ["php-fpm"]
