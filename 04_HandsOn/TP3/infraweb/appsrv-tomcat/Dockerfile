FROM ubuntu:22.04

# install tomcat by transferring the contents of the archive to the image
ADD ./sources/apache-tomcat-9.0.87.tar.gz /usr/local

# install web application in tomcat
COPY ./sources/banque-web.war /usr/local/apache-tomcat-9.0.87/webapps

# Java 11 installation using distribution packages
# package indexes are never present in images: you must
# install them with apt update
RUN apt update && \
    apt install -y openjdk-11-jdk && \
    # create a symbolic link : /usr/local/tomcat -> /usr/local/apache-tomcat-9.0.87
    ln -s /usr/local/apache-tomcat-9.0.87 /usr/local/tomcat

# Environment variables
# The CATALINA_HOME variable must contain the Tomcat installation directory.
ENV CATALINA_HOME=/usr/local/tomcat
# add tomcat's bin/ directory
ENV PATH=$PATH:/usr/local/tomcat/bin

# exposes port 8080, i.e. specifies for the outside world on which port the container listens
EXPOSE 8080

# start the process with ENTRYPOINT or CMD
ENTRYPOINT ["catalina.sh", "run"]
