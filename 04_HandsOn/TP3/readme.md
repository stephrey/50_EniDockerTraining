# Docker personalized images

Preparing a complete technical stack by creating 3 custom images from Dockerfile

---

## The work to be done

Based on predefined images (MariaDB, Tomcat and apache) build a web application using Dockerfiles

## The result

The result consist of 3 distinct file. One for each container

### Create a folder for each container

Create a folder and a dedicated Dockerfile for each container
- dbsrv-mariadb
- appsrv-tomcat
- rp-apache

### Generate the container
- <em>docker build -t dbsrv-mariadb:1.0 .</em>
- <em>docker build -t appsrv-tomcat:1.0 .</em>
- <em>docker build -t rp-apache:1.0</em>

### create a Docker Compose file, to generate all container in one shot
- Navigate to the directory containing the docker-compose.yml file
<em>docker compose up -d</em>

- If you want to force a rebuild of the images before starting the services
<em>docker compose up -d --build</em>

- If you want to stop the services
<em>docker compose down</em>
