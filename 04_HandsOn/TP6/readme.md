### build the image
* the image is already build, it not :
  - <em>docker build -t mon-site:1.0 mon-site/</em>

### test the image
* <em>docker run -d mon-site:1.0</em>

### start the stack
* <em>docker stack deploy --compose-file docker-stack.yml MyStack</em>

### update the service
* list the stack and identify the service
  - <em>docker stack services MaStack</em>
* resize the service replicas:
  - <em>docker service scale <service_name>=<replica_count></em>

### remove the service
* <em>docker stack rm MyStack</em>
