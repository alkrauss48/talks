ARG PHP_VERSION=8.0
ARG INSTALL_BCMATH=false
ARG INSTALL_CALENDAR=false
ARG INSTALL_EXIF=false
ARG INSTALL_GD=false
ARG INSTALL_IMAGICK=false
ARG INSTALL_MOSQUITTO=false
ARG INSTALL_MYSQL=false
ARG INSTALL_OPCACHE=true
ARG INSTALL_PGSQL=true
ARG INSTALL_REDIS=true
ARG INSTALL_SQLSRV=false
ARG INSTALL_XDEBUG=false
ARG INSTALL_ZIP=false

# Backend Builder
FROM composer:2 as php-builder

WORKDIR /app

COPY composer.json composer.lock ./

RUN set -x \
    && composer install \
        --ignore-platform-reqs \
        --no-autoloader \
        --no-interaction \
        --no-progress \
        --no-suggest

COPY . ./
RUN set -x \
    && export TELESCOPE_ENABLED=false \
    && composer dump-autoload \
        --classmap-authoritative \
        --no-interaction \
    && php artisan vendor:publish --tag=public

# Frontend Builder
FROM node:lts-alpine as node-builder

WORKDIR /app

RUN set -x \
    && apk add --no-cache \
        autoconf \
        automake \
        bash \
        g++ \
        libc6-compat \
        libjpeg-turbo \
        libjpeg-turbo-dev \
        libpng \
        libpng-dev \
        libtool \
        libwebp \
        libwebp-dev \
        make \
        nasm

COPY artisan package.json package-lock.json webpack.mix.js ./

RUN set -x \
    && npm ci

COPY public/ public/
COPY resources/ resources/

ARG NODE_ENV=production
ARG ENV=local

RUN set -x \
    && if [ "$ENV" != "local" ]; then \
        node_modules/webpack/bin/webpack.js \
            --no-progress \
            --hide-modules \
            --config=node_modules/laravel-mix/setup/webpack.config.js; \
    fi

# Final Image
FROM clevyr/php:$PHP_VERSION

WORKDIR /app

COPY --chown=root docker/app/rootfs /

RUN crontab /etc/cron.d/scheduler

COPY --from=php-builder --chown=82:82 /app .
COPY --from=node-builder --chown=82:82 /app/public public/

CMD ["s6-svscan", "/etc/s6/app"]
