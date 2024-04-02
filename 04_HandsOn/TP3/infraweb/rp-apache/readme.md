### create the Dockerfile
* Build a new image from httpd:2.4
* copy the sources <em>./sources/reverse-proxy.conf</em> to the container in <em>/usr/local/apache2/conf/extra/</em>
* add the proxy configuration
  -  add <em>"Include /usr/local/apache2/conf/extra/reverse-proxy.conf"</em> in <em>/usr/local/apache2/conf/httpd.conf</em>
  
### to build the container
- <em>docker build -t rp-apache:1.0 . </em>

### to launch the container
- <em>docker run -d -p 80:80 rp-apache:1.0</em>
