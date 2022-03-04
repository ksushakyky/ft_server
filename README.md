# ft_server
The project is designed to get acquainted with system administration. The project uses docker technology to install a full-fledged web server. This server runs several services:
1. Web server with Nginx
2. SQL Database with MariaDB
3. Database web admin with PhpMyAdmin
4. OpenSource CMS with Wordpress

# Docker commands
`docker build -t $(IMAGE_NAME) .` builds the image\
`docker run -it -p 80:80 -p 443:443 --name $(CONTAINER_NAME) $(IMAGE_NAME)` runs the image as a container\
`docker stop $(CONTAINER_NAME)` stops the container\
`docker rmi $(IMAGE_NAME)` removes the image\
`docker rm $(CONTAINER_NAME)` removes the container\
