ansible all  -m ping

ansible all -u vagrant -m ping

ansible all -u vagrant -m raw -a "ls"
