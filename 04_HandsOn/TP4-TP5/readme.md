# TP4 and TP5: Network and Volumes

## TP4: Network creation
In this example, you customize network creation and attach containers to a networks

## TP5: Adding Volumes

---

## TP4: The work to be done

Create the networks in accordance with the attached pdf diagram 
See the description in the attached PDF file <em>https://github.com/stephrey/50_EniDockerTraining/blob/main/04_HandsOn/TP4-TP5/tp-module-4---raseau_vz0ycn970cn.pdf</em>

## TP5: The work to be done

Create volumes in accordance with the attached pdf diagram 
See the description in the attached PDF file <em>https://github.com/stephrey/50_EniDockerTraining/blob/main/04_HandsOn/TP4-TP5/tp-module-5_71i229r185s.pdf</em>

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
