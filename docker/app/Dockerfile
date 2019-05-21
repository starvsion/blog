FROM fedora:30

RUN useradd -ms /bin/bash -u 1337 vessel
WORKDIR /var/www/html

ENV TZ=UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN echo "fastestmirror=true" >> /etc/dnf/dnf.conf

COPY --from=gosu/assets /opt/gosu /opt/gosu
RUN set -x \
    && /opt/gosu/gosu.install.sh \
    && rm -fr /opt/gosu \
    && gosu nobody true

RUN dnf install -y zip unzip git supervisor sqlite \
    && dnf install -y nginx php-fpm composer \
       php-pdo php-gd \
       php-imap php-mysqlnd php-mbstring \
       php-bcmath php-soap php-xdebug \
       php-msgpack php-igbinary php-ldap \
    && mkdir /run/php-fpm \
    && dnf -y autoremove \
    && dnf clean all \
    && rm -rf /tmp/* /var/tmp/*


RUN ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log

COPY h5bp /etc/nginx/h5bp
COPY nginx.conf /etc/nginx/nginx.conf
COPY default /etc/nginx/sites-available/default
COPY php-fpm.conf /etc/php-fpm.conf
COPY xdebug.ini /etc/php.d/15-xdebug.ini
COPY vessel.ini /etc/php.d/99-vessel.ini

EXPOSE 80

COPY supervisord.conf /etc/supervisord.conf
COPY start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container

ENTRYPOINT ["start-container"]
