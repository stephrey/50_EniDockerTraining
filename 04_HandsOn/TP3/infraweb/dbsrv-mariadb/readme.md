 ### to build the container
 docker build -t dbsrv-mariadb:1.0 .

 ### to inspect the container
docker run --rm -it -v /var/run/docker.sock:/var/run/docker.sock wagoodman/dive:latest dbsrv-mariadb:1.0

### to catch the DB password
docker logs naughty_euler
    #2024-03-28 11:31:48+00:00 [Note] [Entrypoint]: GENERATED ROOT PASSWORD: SDv0W/33|yt527*5c>KV{Jdisl9^yCzw

### to launch the container
docker run -d --env MARIADB_RANDOM_ROOT_PASSWORD=true dbsrv-mariadb:1.0
