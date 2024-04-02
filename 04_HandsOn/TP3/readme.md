# TP3: Docker personalized images

In this example, you write a complete technical stack by creating 3 custom images from Dockerfile.


---

## The work to be done

Based on predefined images (MariaDB, Tomcat and apache) build a web application using Dockerfiles.
See the description in the attached PDF file <em>https://github.com/stephrey/50_EniDockerTraining/blob/main/04_HandsOn/TP3/tp-module-3_a6zllkdx6gr.pdf</em>

---

## The result

The result consist of 3 distinct images, one for each container.

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
