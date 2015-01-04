# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  # 64bit machine
  config.vm.define :server64 do |machine|
    machine.vm.box = "scotch/box"
    machine.vm.network "private_network", ip: "192.168.33.10"
  end

  # 32bit machine
  config.vm.define :server32 do |machine|
    machine.vm.box = "hashicorp/precise32"
    machine.vm.network "private_network", ip: "192.168.33.11"
  end

  config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
end
