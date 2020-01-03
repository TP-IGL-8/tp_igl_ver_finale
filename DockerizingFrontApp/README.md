# pour deploiyer le front il faut d'abord :
1) Installer toolbox de docker :
	==> windows:
	https://docs.docker.com/toolbox/toolbox_install_windows/
Ou Application desktop :
https://docs.docker.com/docker-for-windows/install/
2) Clone frontapp
3) execute :
lancer dockermachine VM
 	docker-machine stop
	docker-machine start default
construire l’image Docker de notre app Vue.js :
	docker build -t frontapp/dockerize-vuejs-app .
3)lançons notre app Vue.js dans un container Docker :
docker run -it -p 8080:8080 --rm --name dockerize-vuejs-app-1 frontapp/dockerize-vuejs-app
