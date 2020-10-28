# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    start.sh                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: htagrour <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/01/04 08:22:53 by htagrour          #+#    #+#              #
#    Updated: 2020/01/06 16:40:53 by htagrour         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

apt-get update -y;

#install tools
apt-get install curl lsb-release gnupg vim wget unzip -y;
apt-get install php-phpseclib php-php-gettext php7.3-common php7.3-mysql php7.3-json php7.3-curl php7.3-mbstring php7.3-fpm -y;
apt-get -y install supervisor;
mkdir -p /var/log/supervisor;
mkdir -p /etc/supervisor/conf.d;
mv supervisord.conf /etc/supervisord.conf;
#install nginx

apt-get install nginx -y;
rm /etc/nginx/sites-available/default;
mv default /etc/nginx/sites-available/;
mv nginx-selfsigned.key /etc/ssl/private;
mv nginx-selfsigned.crt /etc/ssl/certs;
echo "daemon off;" >> /etc/nginx/nginx.conf;

#install phpmyadmin

latest=$(curl https://www.phpmyadmin.net/ | grep href | grep files | head -n 1 | sed 's/.*href=//g; s/"//g' |  awk '{ print $1 }');
wget $latest;
unzip phpMyAdmin*;
rm -rf phpMyAdmin*.zip;
mv config.inc.php /phpMyAdmin*;
mv /phpMyAdmin* /usr/share/phpmyadmin;
ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin;
mkdir /usr/share/phpmyadmin/temp;
chmod 777 /usr/share/phpmyadmin/temp;

#set up Wordpress folder

mv wordpress /var/www/html;

#install mysql

export DEBIAN_FRONTEND=noninteractive
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb;
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
dpkg -i mysql-apt-config_0.8.14-1_all.deb
rm mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install mysql-server -y;
chown -R mysql: /var/lib/mysql;

#set up database

service mysql start;
mysql -u root -p"root" -e "CREATE DATABASE hello_wolrd DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
mysql -u root -p"root" -e "GRANT ALL ON hello_wolrd.* TO 'hamza'@'localhost' IDENTIFIED BY '1234'; FLUSH PRIVILEGES;";
mysql -u hamza -p"1234" hello_wolrd < hello_wolrd.sql;
