#!/usr/bin/env bash

###############################################################################
#
# Web Applicaton [WebApplication.git] Provision Shell Script
#
#				..Kris
###

##
# Update our system first
#
echo '--- Updating ---'
yum -y update
echo '...done'

##
# Define front end dependencies here
# If we are missing a package on the server and it needs to be installed
# It is critical that we also add it here
#
echo '--- Installing dependencies ---'
yum install -y gcc gcc-c++ screen vim nano unzip curl wget man git strace emacs
echo '...done'

##
# Install Node.js
# Basically download the tarball and compile this crap for Hernerh
#
#
echo '--- Installing Node.js ---'
cd ~
wget http://nodejs.org/dist/v0.10.30/node-v0.10.30.tar.gz #Node version hard coded here :(
tar xzvf node-v* && cd node-v*
./configure
make
sudo make install
node --version
echo '...done'

##
# Install PHP
# This will add the custom repo and install php
#
echo '--- Installing PHP ---'
if [[ -n $(yum repolist | grep webtatic) ]]; then
	echo '[Webtatic Repository already installed]'
else
	rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
	rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
XDEBUGCONF=$(cat <<EOF
	zend_extension=/usr/lib64/php/modules/xdebug.so
	xdebug.profiler_enable = 1
	xdebug.remote_enable = 1
	xdebug.remote_connect_back = 1
EOF
)
	echo "${XDEBUGCONF}" > /etc/php.d/xdebug.ini
fi
yum install -y php56w php56w-cli php56w-devel php56w-opcache php56w-pdo php56w-mysql php56w-xml php56w-soap php56w-mcrypt php56w-pecl-apcu php56w-pecl-xdebug php56w-posix
yum install -y mod_php #Needed for Apache
echo '...done'


##
# Install PHP Pear 
#
echo '--- Configuring php-pear ---'
pear channel-discover pear.symfony-project.com
echo '...done'

##
# For installing DB drivers <FUTURE>
#
#echo '--- Installing Mongo ---'
#printf "\n" | pear install pecl/mongo # -d php_ini=/etc/php.ini
#echo "extension=mongo.so" | tee -a /etc/php.d/mongo.ini
#echo '...done'

##
# Install PHPUnit
# Rule number 76
#
echo '--- Installing PHPUnit ---'
cd ~
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit
phpunit --version
echo '...done'

##
# Install Composer because we all enjoy deployable code
#
echo '--- Installing composer ---'
if [[ ! -f /usr/local/bin/composer ]]; then
    curl -s https://getcomposer.org/installer | php
	# Make Composer available globally
	mv composer.phar /usr/local/bin/composer
else
	echo '[composer already installed]'
fi
echo '...done'

##
# Install the Apache Web Server and configure to start on boot
#
echo '--- Installing apache ---'
yum install -y httpd
chkconfig httpd on #Turn this on on boot!
echo '...done'

##
# Install the mod_ssl module for Apache because security is important
#
echo '--- Installing mod_ssl ---'
yum install -y mod_ssl
echo '...done'

##
# Install default vHost config
#
echo '--- Creating vHost ---'
cp -vp /workspace/WebApplication/Install/httpd/vhost.conf /etc/httpd/conf.d/vhost.conf
echo '...done'

##
# Install default HTTPd.conf
#
echo '--- Replacing Apache Config ---'
cp -vp /workspace/WebApplication/Install/httpd/httpd.conf /etc/httpd/conf/httpd.conf
echo '...done'

##
# Restart Apache!
#
echo '--- Restarting Services ---'
service httpd restart
echo '...done'

##
# Lets figure out how you can access this thing
# Spit out some IP addresses to try
#
echo '********************************************************************************'
echo '********************************************************************************'
echo '*'
echo '* You should now be able to find the VM IP address in here :' 
echo '*'
echo '*'
ifconfig | grep "inet"
echo '*'
echo '*'
echo '* Go ahead and hit that IP in your browser..'
echo '*'
echo '* 		..Yes I am serious'
echo '*'
echo '*								 ..Kris'
echo '********************************************************************************'
echo '********************************************************************************'

##
# We should now have an updated and awesome dev server!
#
