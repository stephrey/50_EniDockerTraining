### create Dockerfile
...

### first build
<em>docker build -t appsrv-tomcat:1.0 .</em>

### check if Java is working properly
<em>docker run -it appsrv-tomcat:1.0</em>
<em>java -version</em>

### add applications
<em>ADD ./sources/apache-tomcat-9.0.87.tar.gz /usr/local</em>
<em>RUN ln -s /usr/local/apache-tomcat-9.0.87 /usr/local/tomcat</em>
<em>COPY ./sources/banque-web.war /usr/local/tomcat/webapps</em>

### add environement variables
- use the shell command "env" to check the environment variables

### to launch the container ( environment variables are declared internally in the Dockerfile)
<em>docker run -d appsrv-tomcat:1.0</em>

### optimized the layers... see Dockerfile vs Dockerfile.old
we should win a layer
<em>docker run --rm -it -v /var/run/docker.sock:/var/run/docker.sock wagoodman/dive:latest appsrv-tomcat:1.0</em>

### expose tomcat ports

### stop and restart tomcat
