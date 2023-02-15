# PHP ORQALI MYSQL MA'LUMOTLAR BAZASIGA ULANISH VA SO'ROVLAR BILAN ISHLASH
## ishlatish
Ma'lumotlar bazasiga yozish:

```php
<?php
$db->insertInto('users',[
	'full_name'=>'Komiljonov Obidjon',
	'username'=>'KomiljonovDev',
	'password'=>12345
]);

```
Ma'lumotlar bazasidan shartga ko'ra ma'lumotni olish:

```php
<?php
print_r($db->selectWhere('users',[
	[
		'username'=>'KomiljonovDev',
		'cn'=>'='
	],
	[
		'password'=>12345,
		'cn'=>'='
	]
]));

```
Ma'lumotlar bazasidan jadvalning barcha ma'lumotlarini olish:

```php
<?php
print_r($db->selectAll('users'));

```
Ma'lumotlar bazasidagi ma'lumotni shartga ko'ra yangilash:

```php
<?php
$db->updateWhere('users',
	[
		'username'=>'KomiljonovDev',
		'password'=>54321
	],
	[
		'username'=>'KomiljonovDev',
		'cn'=>'='
	]
);

```
Ma'lumotlar bazasiga sql so'rov bilan murojaat qilish:

```php
<?php
$db->withSqlQuery("UPDATE `users` SET `password` = '12345' WHERE `users`.`id` = 1;");

```
Ma'lumotlar bazasidan biror ma'lumotni shartga ko'ra o'chirish:

```php
<?php
$db->deleteWhere('users',[
	[
		'username'=>'KomiljonovDev',
		'cn'=>'='
	]
]);

```
