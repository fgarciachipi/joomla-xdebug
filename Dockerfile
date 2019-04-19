FROM joomla:3.9.5-php7.1

LABEL version="1.1.0"
LABEL description="Joomla development environment with Xdebug"

ENV XDEBUG_PORT 9000

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.profiler_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.profiler_output_name=cachegrind.out.%t" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.profiler_output_dir=/tmp" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "max_input_vars=2000" >> /usr/local/etc/php/conf.d/custom.ini \
    && rm -rf /usr/local/etc/php/conf.d/opcache-recommended.ini

EXPOSE 9000

COPY ./crt/server.crt /etc/ssl/certs/server.crt
COPY ./crt/server.key /etc/ssl/private/server.key

RUN sed -i "s/ssl-cert-snakeoil.pem/server.crt/g" /etc/apache2/sites-available/default-ssl.conf \
   && sed -i "s/ssl-cert-snakeoil.key/server.key/g" /etc/apache2/sites-available/default-ssl.conf \
   && a2ensite default-ssl \
   && a2enmod ssl \
   && service apache2 restart