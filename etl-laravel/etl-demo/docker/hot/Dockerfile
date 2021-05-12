FROM node:lts-alpine

WORKDIR /app
VOLUME /app

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

COPY rootfs/ /

CMD ["/entrypoint"]
