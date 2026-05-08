# Tâche 5 - Docker Swarm

## Commandes utilisées
docker swarm init
docker swarm join-token worker
docker node ls
docker service create --name mon-nginx --publish 80:80 --replicas 1 nginx
docker service ls
docker service ps mon-nginx
docker service scale mon-nginx=3
