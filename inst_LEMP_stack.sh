# s00
sudo apt update -y
sudo apt install nginx -y

#s01 enable and verify
sudo ufw allow 'Nginx HTTP'
sudo ufw status

# s02
sudo apt install mysql-server
sudo mysql_secure_installation

# s03 PHP
sudo apt install php-fpm php-pear php-gd php-mysql


