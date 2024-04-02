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

### create Docker Compose file as compose.yml
* define services:
  - create "httpd1", "httpd2", "httpd3" and "httpd4" container based on httpd:latest
* define network "mon-reseau-1" and "mon-reseau-2"
    - define subnet for "mon-reseau-1" as 172.28.0.0/16
    - define gateway for "mon-reseau-1" as 172.28.0.1
    - define subnet for "mon-reseau-2" as 172.29.0.0/16
    - define gateway for "mon-reseau-2" as 172.29.0.1
    - attacht the container "httpd1" and "httpd2" to the network "mon-reseau-1"
    - attacht the container "httpd3" and "httpd4" to the network "mon-reseau-2"
* define volumes
    - create to volume "httpd-data1" and "httpd-data2"
    - attacht the container "httpd1" and "httpd2" to the volume "httpd-data1"
    - - attacht the container "httpd3" and "httpd4" to the volume "httpd-data2"

### Generate and launch the container
* <em>docker compose up -d</em>

### test the network setting
* test the network setting using <em>docker network inspect mon-reseau-1</em>
* etc...

### test the volume setting
* test the volumes setting using <em>docker volume inspect httpd-data2</em>
* etc...
