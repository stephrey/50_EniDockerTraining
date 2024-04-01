# use the mon-site image as a base
...

# create yaml file docker-stack.yml
...

# register the container in the registry
docker tag mon-site:1.0 stephrey/mon-site:x64-1.0

# lancer la stack
docker deploy --compose-file docker-stack.yml MaStack

# au besoin modifier le nombre de replicat et reployer

