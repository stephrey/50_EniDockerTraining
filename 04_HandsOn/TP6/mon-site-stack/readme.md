### build the image
* the image is already build, if not :
  - <em>docker build -t mon-site:1.0 mon-site/</em>

### test the image
* <em>docker run -d mon-site:1.0</em>

### register the container in the registry
* docker tag mon-site:1.0 stephrey/mon-site:x64-1.0
* docker push stephrey/mon-site:x64-1.0
  
### create yaml file docker-stack.yml
* use the "mon-site" image as a base
  - see <em>https://github.com/stephrey/50_EniDockerTraining/tree/main/04_HandsOn/TP6/mon-site</em>

### start the stack
* <em>docker stack deploy --compose-file docker-stack.yml MyStack</em>

### update the service
* list the stack and identify the service
  - <em>docker stack services MaStack</em>
* resize the service replicas:
  - <em>docker service scale <service_name>=<replica_count></em>

### remove the service
* <em>docker stack rm MyStack</em>
