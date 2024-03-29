FROM httpd:2.4

COPY ./sources/reverse-proxy.conf /usr/local/apache2/conf/extra/

RUN echo "Include /usr/local/apache2/conf/extra/reverse-proxy.conf" >> /usr/local/apache2/conf/httpd.conf
