#!/bin/bash

###############################################################################
#
# WebApplication [WepApplication.git] EC2 Shell Script
#
#				..Kris
###

echo "EC2 Installation Process"

##
# Check for root status
if [ "$(id -u)" != "0" ]; then
   echo "Please run with elevated privileges (root)!" 1>&2
   exit 1
fi

##
# Create WebApplication user
useradd WebApplication

##
# Install server deployment key



##
# Build directories and checkout master and develop
#
mkdir /var/www
mkidr /var/www/vhost
mkdir /var/www/vhost/WebApplication-master
mkdir /var/www/vhost/WebApplication-develop
cd /var/www/vhost
