<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost',
	'username' => 'mvcuser',
	'password' => 'cyber/58101',
	'database' => 'mvcdb',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);

$capsule->bootEloquent();

