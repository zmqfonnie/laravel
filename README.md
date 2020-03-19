# laravel
laravel test project
### laravel安装 
composer create-project --prefer-dist laravel/laravel=5.6.* laravel
### laravel-ide-helper安装 
PHPstorm laravel代码提示 https://github.com/barryvdh/laravel-ide-helper 

composer require barryvdh/laravel-ide-helper

### 创建数据库表
php artisan make:migration create_hd_table --create=hd

php artisan migrate

遇到创建不了表: https://www.cnblogs.com/wangzhaobo/p/9586213.html


