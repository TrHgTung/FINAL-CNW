Video demo: https://youtu.be/fjIs9LTnqDM
Heroku demo: https://frozen-crag-01030.herokuapp.com/

# Laravel 9 & React js - Mini Bookshop Application
-   Local: D:\TTTD_CongNgheWeb\TTTD-ecommerce

## Run Locally

Clone the project

```bash
  git clone https://github.com/TrHgTung/FINAL-CNW
```

Go to the project directory

-	Cài đặt Composer Desktop (windows); XAMPP Apache; tích hợp PHP 8.1.2 trở lên
```

-   Copy .env.example file to .env và sửa lại khóa DB_DATABASE

-   Mở XAMPP và Start 2 dịch vụ: Apache và MySQL

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

```bash
    RUN: php artisan serve 
(mặc định: 127.0.0.1:8000) cổng 8000
```

-   Lưu ý: Chỉ nên import file *.jpg khi test admin

#### Login

-   email = admin@example.com
-   password = 123

#### User (khachs hang):
-   create new one

