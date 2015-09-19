#!/usr/bin/env bash

###############################################################################
#
# Web Applicaton [WebApplication] Provision Shell Script
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
yum install -y gcc screen vim nano unzip curl wget man git strace emacs
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
echo '...done'


##
# Install PHP Pear and discover PHPUnit
#
echo '--- Configuring php-pear ---'
pear channel-discover pear.phpunit.de
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
# Install PHPUnit so Hannah has no excuses
# Rule number 76
#
echo '--- Installing PHPUnit ---'
pear install -a phpunit/PHPUnit
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
cp -vp ./httpd/vhost.conf /etc/httpd/conf.d/vhost.conf
echo '...done'

##
# Install default HTTPd.conf
#
echo '--- Replacing Apache Config ---'
cp -vp ./httpd/httpd.conf /etc/httpd/conf/httpd.conf
echo '...done'


##
# Restart Apache!
#
echo '--- Restarting Services ---'
service httpd restart
echo '...done'


##
# Fin!!
#
echo 'Fin'