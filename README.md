<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang website ini

Website ini adalah sebuah tempat dimana anda dapat sekaligus menyewa dan merentalkan mobil. Anda dapat registrasi dan login sesuai identitas. Serta dapat langsung menyewa mobil yang tersedia.

Tech Stack :

- Laravel 10
- Postgresql (via elephantsql)
- Vue Auth UI
- Sweetalert
- Bootstrap
- Laravel Collective

## Command CLI

- clone repo
- php composer create-project laravel/laravel car-rent
- npm i
- php artisan serve
- composer require laravel/ui
- php artisan ui bootstrap
- php artisan ui bootstrap --auth
- php artisan ui vue --auth
- php artisan make:controller CarsController --resource
- php artisan make:controller RentalController --resource
- php artisan make:model Car -m
- php artisan make:model Rent -m
- php artisan migrate
- composer require realrashid/sweet-alert
- php artisan sweetalert:publish

## Bug for improvement

- Belum ada fitur search
- Tampilan detail mobil berbeda karena harus menambahkan link styling tambahan untuk datepicker
