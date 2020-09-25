FROM debian:buster

RUN apt-get update && \
    apt-get -y upgrade && \
    apt-get install -y  nginx \
    mariadb-server \
    wget \
    php7.3 \
    php-fpm \
    php-mysql \
    php-cli \
    php-mbstring

COPY srcs /root/

RUN bash /root/server-config.sh

ENTRYPOINT bash /root/start.sh

CMD tail -f /dev/null
