# fighter-curation
## ローカル環境
こいつらをインストーーーーール！
- virtual box
- vagrant

### gitのクローン
```
$ cd クローンしたいディレクトリ
$ git clone githubから取得したURL
```

### ボックスを追加
```
$ vagrant box add CentOS72 https://github.com/CommanderK5/packer-centos-template/releases/download/0.7.2/vagrant-centos-7.2.box
```

### vagrantの起動(初回起動時はansibleが走るので時間がかかります。)
```
$ vagrant up
```

### laravelの本体をインストール
```
$ vagrant ssh
$ cd /app/fighter-curation
$ composer install
```

### 動作確認
以下のURLにアクセスして画面が出力されればクリア！
```
http://192.168.33.10/
```
