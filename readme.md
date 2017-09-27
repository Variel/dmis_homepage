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

8. News 삽입

    8.1. `[설치경로]/resources/views/news/` 아래에 `news01.blade.php`를 복사해서 새로운 파일 생성 (`[고유ID].blade.php` 형식, 고유ID는 임의의 문자)
    
    8.2. `@section('news-title', '[제목 삽입]')`
    
    8.3. `@section('news-content')` 부터 `@endsection` 사이에 HTML 형식으로 기사 내용 추가
    
    8.4. `[설치경로]/resources/views/home.blade.php` 파일을 열어 아래와 같이 내용 추가
    
```
<ul class="news-list" id="news-list">
    <li><a href="/news?id=news01"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
    <li><a href="/news?id=[고유ID]"><strong>[원하는 날짜]</strong> [원하는 제목]</a></li>
    ...
</ul>

```

9. DB 연동

    9.1. People, Publications 항목은 DB 연동처리 되어있습니다. 아래는 초기 DB 세팅을 하는 과정입니다.
    
    9.2. `[설치경로]/.env` 파일을 아래와 같이 수정 (임시 데이터베이스 연결: 추후 실서버 DB 정보로 변경)
    
```
...
DB_CONNECTION=mysql
DB_HOST=ap-cdbr-azure-east-a.cloudapp.net
DB_PORT=3306
DB_DATABASE=dmis
DB_USERNAME=b2053901de7b9a
DB_PASSWORD=c1fa6bb8
... 
```


    9.3. 실서버일 경우 아래 명령어 실행 (초기 DB 설정: 테이블 생성 등) 
    
        9.3.1 `$ cd [설치경로]`
    
        9.3.2 `$ php artisan migrate`
        
10. Person 추가/수정

    10.1. people 테이블에 자료 입력/수정

    10.2. `grade`열을 기준으로 People 페이지 좌측 노란 글씨 영역이 구분 됨 (철자/대소문자/띄어쓰기 유의)
    
11. Publication  추가/수정

    11.1. publications 테이블에 자료 입력/수정

    11.2. `type`열을 기준으로 좌측 카테고리가 구분 됨 (철자/대소문자/띄어쓰기 유의)
    
    11.3. `detailType`열이 Publications 페이지의 밝고 흰 글씨 부분에 들어감