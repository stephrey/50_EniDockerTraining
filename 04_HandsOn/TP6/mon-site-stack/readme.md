# use the "mon-site" image as a base
see <em>https://github.com/stephrey/50_EniDockerTraining/tree/main/04_HandsOn/TP6/mon-site</em>

# create yaml file docker-stack.yml
...

# register the container in the registry
docker tag mon-site:1.0 stephrey/mon-site:x64-1.0

# lancer la stack
<em>docker stack deploy --compose-file docker-stack.yml MaStack</em>

# au besoin modifier le nombre de replicat et reployer

