1. apache2 설치 `$ sudo apt-get install apache2`
2. php7 설치

    2.1. `$ sudo add-apt-repository ppa:ondrej/php`

    2.2. `$ sudo apt-get update`

    2.3. `$ sudo apt-get install php7.0`

    2.4. `$ sudo apt-get install php7.0-mysql`

    2.5. `$ sudo service apache2 restart`

    2.6. 잘 안 될 경우 `$ sudo apt-get install libapache2-mod-php`

3. 접근 권한 설정

    3.1. `$ cd [설치경로]/public`

    3.2. 디렉토리 소유계정을 www-data로 변경 `$ sudo chown -R www-data ./`

    3.3. 디렉토리 접근 권한 변경 `$ sudo chmod -R 775 ./`

    3.4. `$ cd /etc/apache2/sites-enabled/`

    3.5. `$ sudo nano 000-default.conf`

    3.6. 파일의 중간에 아래 코드 삽입
```
<Directory [설치경로]/public>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
</Directory>
```

4. rewrite 모듈 설정 `sudo a2enmod rewrite`

5. php 모듈 설치

    5.1. `$ sudo apt-get install php-xml`

    5.2. `$ sudo apt-get install php-mbstring`

6. composer 설치

    6.1. `$ cd [설치경로]`

    6.2. `$ php -f composer.phar install`

7. laravel 환경변수 설정

    7.1. `$ cd [설치경로]`

    7.2. `$ php artisan key:generate`

