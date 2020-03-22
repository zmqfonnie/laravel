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

遇到创建不了表: https://www.cnblogs.com/wangzhaobo/p/9586213.html <br/>
或者修改config/database.php配置项 'mysql'
````javascript
 'charset' => 'utf8',
 'collation' => 'utf8_unicode_ci',
````
### 路由访问不了
修改nginx网站配置 
>php artisan route:list 查看所有路由
````text
location / {
    # First attempt to serve request as file, then
    # as directory, then fall back to displaying a 404.
    # try_files $uri $uri/ =404;
    try_files $uri $uri/ /index.php?$query_string;
}
````


###测试数据

>创建model
````javascript
php artisan make:model Model/Admin -m
````
>新建表
````
php artisan migrate
````
>laravel自带工具
````
php artisan tinker
````
>创建3条测试数据
````
factory(App\Model\Admin::class,3)->create();
````
>创建控制器
````
php artisan make:controller Admin/EntryController
````
>
