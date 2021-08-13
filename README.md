## Creamos un proyecto
```php
laravel new proyecto
```
## Creamos una base de datos
```sql
CREATE DATABASE db;
```
## Instalamos el componente _Livewire_
```php
composer require livewire/livewire
```
## Instalamos el componente _Livewire_
```php
composer require livewire/livewire
```
## Creamos nuestro  componente _Usuario_
```php
php artisan make:livewire users
```
## Hacemos las _Migraciones_
```php
php artisan migrate
```
## A travez de tinker creamos _Usuarios_
```php
php artisan tinker

User::factory()->count(12)->create()
```
