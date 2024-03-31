FROM ubuntu:22.04

# installation de tomcat en transferant le contenu de l'archive dans l'image
ADD ./sources/apache-tomcat-9.0.87.tar.gz /usr/local

#installer l'application web dans tomcat
COPY ./sources/banque-web.war /usr/local/apache-tomcat-9.0.87/webapps

# installation de Java 11 en utilisant les paquets de la distribution
# les index de paquets ne sont jamais prsent dans les images : il faut
# les fenerer avec apt update
RUN apt update && \
    apt install -y openjdk-11-jdk && \
    # creer un lien symbolique : /usr/local/tomcat -> /usr/local/apache-tomcat-9.0.87
    ln -s /usr/local/apache-tomcat-9.0.87 /usr/local/tomcat

# Variables d'environement
# La variable CATALINA8HOME doit contenir le répertoire d'installation de Tomcat
ENV CATALINA_HOME=/usr/local/tomcat
# on ajoute le repertoire bin/ de tomcat
ENV PATH=$PATH:/usr/local/tomcat/bin

# expose port 8080, c'est à dire préciser pour le monde extérieur sur quel pour le container écoute
EXPOSE 8080

# lancer le processus avec ENTRYPOINT ou CMD
ENTRYPOINT ["catalina.sh", "run"]
