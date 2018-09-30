# fighter-curation
## ローカル環境
- ボックスを追加
```
vagrant box add CentOS72 https://github.com/CommanderK5/packer-centos-template/releases/download/0.7.2/vagrant-centos-7.2.box
```

- vagrantの起動(初回起動時はansibleが走るので時間がかかります。)
```
vagrant up
```