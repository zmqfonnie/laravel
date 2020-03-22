# laravel
laravel test project
### laravel安装 
composer create-project --prefer-dist laravel/laravel=5.6.* laravel
### laravel-ide-helper安装 
PHPstorm laravel代码提示 https://github.com/barryvdh/laravel-ide-helper 

composer require barryvdh/laravel-ide-helper

### 创建数据库表
php artisan make:migration create_laravel_table --create=laravel

php artisan migrate

遇到创建不了表: https://www.cnblogs.com/wangzhaobo/p/9586213.html
或者修改config/database.php>mysql
````javascript
 'charset' => 'utf8',
 'collation' => 'utf8_unicode_ci',
````
### 路由访问不了
修改nginx网站配置
````text
location / {
    # First attempt to serve request as file, then
    # as directory, then fall back to displaying a 404.
    # try_files $uri $uri/ =404;
    try_files $uri $uri/ /index.php?$query_string;
}
````




