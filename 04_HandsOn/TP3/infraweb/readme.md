# TP3: Docker personalized images

In this example, you write a complete technical stack by creating 3 custom images from Dockerfile.

See description here <em>https://github.com/stephrey/50_EniDockerTraining/tree/main/04_HandsOn/TP3</em>

---

> Please note that the technical stack for this example will be launched on the host (no swarm deployment).

---

### create Docker Compose file as compose.yml

* define services:
  - create the reverse-proxy server
  - create Tomcat server
  - create MariaDB server
* define network
    - create "infraweb-network" network
    - define subnet as 172.32.0.0/16
    - define gateway as 172.32.0.1
* define volumes
    - create "mariadb"

### to build the stack
* <em>docker compose build</em>

### to launch the stack
* <em>docker compose up</em>

### to stop the stack
* <em>docker compose down</em>


