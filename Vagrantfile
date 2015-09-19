# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "bento/centos-7.1"

  # config.vm.box_check_update = false

   config.vm.network "public_network"

  # config.ssh.forward_agent = true

  config.vm.synced_folder "~/vm-share", "/workspace"

  config.vm.provider "virtualbox" do |vb|
    vb.name = "WebApplication"
  #   vb.gui = true
    vb.customize ["modifyvm", :id, "--memory", "512"]
  end

  config.vm.provision :shell, :path => "Install/Install.sh"
end
