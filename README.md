<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 新金流api

- php 7.3
- jwt

## 安裝

- composer install
- php artisan migrate
- php artisan jwt:secret
- php artisan db:seed (產生權限列表)

##　錯誤HTTP CODE說明

- 400 未登入
- 401 參數錯誤或特殊錯誤
- 402 無權限
- 500 伺服器錯誤

## 產生文件

- php artisan l5-swagger:generate

## 產生假資料(總控 商代 商戶)

- php artisan db:seed --class=AdminUsersTableSeeder

## 細節

- 刪除一律使用軟刪除 所以Model一定要創立 [use SoftDeletes]
- 新增修改刪除皆要呼叫操作紀錄function saveActionLog

## QA

- Seed 無法執行 => composer dump-autoload