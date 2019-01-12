# fighter-curation
## 環境構築

### 必要なもの
- git 
- docker
	- Docker version 18.06.1-ce, build e68fc7a
- docker-compose
	- docker-compose version 1.22.0, build f46880f

### 構築コマンド

```
$ git clone --recursive https://github.com/gusto-putty/fighter-curation.git
$ cp web/.env.example web/.env
$ cp .env.laradock laradock/.env
$ cp my.cnf laradock/mysql/my.cnf
$ cd laradock
$ docker-compose up -d --build nginx mysql workspace
$ docker-compose exec workspace composer install
$ docker-compose exec workspace php artisan key:generate
$ docker-compose exec workspace npm install
$ docker-compose exec workspace php artisan migrate
```

画面が表示できれば完了

[http://localhost:8080/](http://localhost:8080/)
