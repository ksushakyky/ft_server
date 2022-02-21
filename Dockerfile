# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: maragorn <maragorn@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/01 15:54:28 by maragorn          #+#    #+#              #
#    Updated: 2021/03/01 16:39:55 by maragorn         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #


FROM		debian:buster

RUN			apt-get update && apt-get -y upgrade

RUN			apt-get -y install nginx default-mysql-server wordpress openssl unzip php php7.3-fpm php-mysql php-xml php-mbstring

ADD 		https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.zip \
			phpMyAdmin.zip

RUN			unzip phpMyAdmin.zip && mv phpMyAdmin-5.1.0-all-languages /var/www/html/phpmyadmin

COPY		/srcs/wp-config.php /var/www/html/wordpress/

COPY		/srcs/start.sh .

COPY 		/srcs/autoindex.sh .

COPY   		/srcs/db.sql .

COPY		/srcs/nginx.conf /etc/nginx/sites-available/

COPY 		/srcs/config.inc.php /var/www/html/phpmyadmin/

RUN   		ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled && \
			rm /etc/nginx/sites-enabled/default && rm /etc/nginx/sites-available/default

RUN			cp -r /usr/share/wordpress /var/www/html/ && rm /var/www/html/wordpress/wp-config.php

RUN			chmod 777 start.sh

RUN			chown -R www-data:www-data /var/www/html

RUN			openssl req -x509 -nodes -newkey rsa:2048 -days 365  \
			-keyout /etc/ssl/private/localhost.key \
			-out /etc/ssl/certs/localhost.crt \
			-subj "/C=RU/ST=Moscow/L=Moscow/O=42/OU=21/CN=maragorn"

EXPOSE		80 443

ENTRYPOINT ["bash", "start.sh"]