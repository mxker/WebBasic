# Laravel5.5-basic
快速网站搭建-基础版

包含内容：
    网站后台模板；
    网站后台登录、注册；
    基础数据：BasedataSeeder;
    API RESTful接口搭建：使用Passport;
    接口登录；
    
操作：
    直接克隆：git clone；
    配置.env；
    composer 更新：composer update；
    数据表迁移: php artisan migrate --seed;
    生成密码令牌：php artisan passport:client --password;
    发布资源文件：php artisan vendor:publish –provider=”Laravel\Passport\PassportServiceProvider” --tag="config"；
    修改对应配置即可。
    
注：初始数据在BaseDataSeeder中查看。
