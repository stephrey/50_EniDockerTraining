### Create the Dockerfile
* Build a new image from mariadb:10.11
* copy the sources <em>./sources/init-db.sql</em> in <em>/docker-entrypoint-initdb.d</em>

   
### to build the container
- <em>docker build -t dbsrv-mariadb:1.0 .</em>

### to inspect the container
- <em>docker run --rm -it -v /var/run/docker.sock:/var/run/docker.sock wagoodman/dive:latest dbsrv-mariadb:1.0</em>

### to catch the DB password
- docker logs 'container-name'
- find the password in the log
    - #2024-03-28 11:31:48+00:00 [Note] [Entrypoint]: GENERATED ROOT PASSWORD: SDv0W/33|yt527*5c>KV{Jdisl9^yCzw

### to launch the container
- <em>docker run -d --env MARIADB_RANDOM_ROOT_PASSWORD=true dbsrv-mariadb:1.0</em>
