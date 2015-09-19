# Public
Primary Public Facing Repository

Install
=====

 - Install the latest version of vagrant http://www.vagrantup.com/downloads
 - Install VirtualBox https://www.virtualbox.org/wiki/Downloads
 - Update your vagrant repos `vagrant box update`
 - You might have to log out and log back in
 - On the CLIENT create a directory called `~/vm-share` 
 - This will automatically be synced to `/workspace` on the HOST
 - `vagrant up` to build the development environment
 - Select an interface with internet access (Probably 1)
 - Grab a cup of coffee - this takes a while
 - `vagrant ssh` to access the server
 
Test out the server
=====
 - Read the vagrant output to find your IP address (At the very end)
 - Hit that IP in a browser
 - Take a gander at `~/vm-share/WebApplication/Public/index.php` on your CLIENT machine
 - Buy Kris brunch

Release Notes
======
 - CentOS 7.1
 - PHP 5.6
 - Apache 2.4
 - Node 0.10
 - Composer HEAD
 
Pipeline / TODO
======
 - Bash profiles
 - API connection and testing
 - Update.sh
 - Deploy.sh
 
 Troubleshooting
 =====
  - `vagrant destroy` 
  	- Totally okay to run 
  	- Will essentially <nuke> the VM
  - `vagrant version`
  	- This install needs 1.7+ to run
  - `vagrant up`
  	- This will spin up the VM and run Install.sh
  - `vagrant halt`
  	- Be patient! This will shut the server down