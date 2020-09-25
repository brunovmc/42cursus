mkdir var/www/localhost

cp /root/nginx.conf /etc/nginx/sites-available/default

cp /root/info.php /var/www/localhost

#instala phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
tar -xzvf phpMyAdmin-5.0.2-english.tar.gz
rm -rf phpMyAdmin-5.0.2-english.tar.gz
mv phpMyAdmin-5.0.2-english /var/www/localhost/phpmyadmin
chown -R www-data:www-data /var/www/localhost/phpmyadmin

#instala wordpress
wget https://wordpress.org/latest.tar.gz
tar -xzvf latest.tar.gz
rm -rf latest.tar.gz
cp /root/wp-config.php wordpress/wp-config.php
mv wordpress /var/www/localhost/

# Configura superuser phpmyadmin
service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "CREATE USER 'bvidigal'@'localhost' IDENTIFIED BY '1234';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON *.* TO 'bvidigal'@'localhost' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

# Database e User do wordpress
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "CREATE USER 'wordpress'@'localhost' IDENTIFIED BY '1234';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

#ssl config

openssl req -newkey rsa:4096 -days 365 -nodes -x509 \
	-subj "/C=BR/ST=Sao Paulo/L=Sao Paulo/O=42sp/OU=bvidigal/CN=localhost/emailAdress=bvidigal@student.42sp.org" \
	-keyout localhost.dev.key \
	-out localhost.dev.crt 2>> /dev/null
mv localhost.dev.crt /etc/ssl/certs/
mv localhost.dev.key /etc/ssl/private/
chmod 600 /etc/ssl/certs/localhost.dev.crt /etc/ssl/private/localhost.dev.key
