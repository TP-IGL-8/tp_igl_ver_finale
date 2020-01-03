#ce projet pour deploiyer le project dans docker dans on besoin de :
#pour deploiyer le front il faut d'abord :
#1) Installer toolbox de docker :
#	==> windows:
#	https://docs.docker.com/toolbox/toolbox_install_windows/
#Ou Application desktop :
#https://docs.docker.com/docker-for-windows/install/
#installer virtualbox de lunix
#2) lancer les cmd suivants:
# docker-machine stop
#ouvrir virtualbox lunix et aller vers default et ajouter le project dans partager dans permanents repertoires
#docker-machine startdefault
#lancer la cmd pour build images
#docker-compose up -d --build database && docker-compose up -d --build app && docker-compose up -d --build web
#apres lancer cmd pour  enter you laravel_app's docker container by executing
#docker exec -it laravel_app bash
#et dans bash executer :
#php artisan key:generate

#php artisan config:cache

#php artisan route:cache
#0.0.0.0:8990
#your-docker-machine-ip:8990
