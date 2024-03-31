# creer le Dockerfile

# premiere build
docker build -t appsrv-tomcat:1.0 .

# voir si Java fonctionne bien
docker run -it appsrv-tomcat:1.0
java -version

# ajouter les applications
ADD ./sources/apache-tomcat-9.0.87.tar.gz /usr/local
RUN ln -s /usr/local/apache-tomcat-9.0.87 /usr/local/tomcat
COPY ./sources/banque-web.war /usr/local/tomcat/webapps

# ajouter les variables d'environement
# "env" dans le shell pour les checker

# to launch the container, les variables d'environement sont déclarer en interne dans le Dockerfile
docker run -d appsrv-tomcat:1.0

# optimisation des layer... voir Dockerfile vs Dockerfile.old
# on devrait gagner un layer
docker run --rm -it -v /var/run/docker.sock:/var/run/docker.sock wagoodman/dive:latest appsrv-tomcat:1.0

# expose le port de tomcat
# stop et restart tomcat
