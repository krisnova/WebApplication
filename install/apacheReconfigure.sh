#!/bin/bash

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