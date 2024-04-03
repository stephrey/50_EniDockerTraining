### build the image
<em>docker build -t mon-site:1.0 mon-site/</em>

### test the image
<em>docker run -d mon-site:1.0</em>

### start the service
* as example with 3 replicas
* <em>docker service create --replicas 3 mon-site:1.0</em>

### update the service
* <em>docker service update --replicas 1 'service-name'</em>

### remove the service
* <em>docker service rm 'service-name'</em>
