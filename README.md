# Public
Primary Public Facing Repository

Vagrant Install
=====

 - Install the latest version of vagrant http://www.vagrantup.com/downloads
 - In your home folder create a directory called `~vm-share` 
 - This will automatically be synced to `/workspace` on the host
 - `vagrant up` to build the development environment
 - Select and interface with internet access
 - `vagrant ssh` to access the server

Provisioning Steps
=====

 - Go into the repository directory on the host `cd /workspace/WebApplication` 
 - `ls` make sure everything looks okay
 - `cd Install` Go into the Install directory
 - `sudo sh Install.sh` to Provision the environment [ROOT WARNING]
 
Test out the server
=====

 - `ifconfig | grep inet` on the host to get your local ip address on your home network
 - `inet 10.1.1.X  netmask 255.255.255.0  broadcast 10.1.1.255` Should look like this
 - In any browser on your home network go to `10.1.1.X`
 - Change a file in `~/vm-share/WebApplication`
 
Win
======
 - Call Kris and tell her how easy that was
