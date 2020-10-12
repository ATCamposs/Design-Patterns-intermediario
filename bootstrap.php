<?php

require __DIR__ . '/vendor/autoload.php';

$builder = new Design\Db\Builder\MySqlBuilder();

$director = new Design\Db\Builder\UsersDirector($builder);

$config = [
    'dsn' => 'mysql:host=localhost; dbname=designtestes',
    'user' => 'root',
    'passwd' => '1234'
];

Design\Db\DbSingleton::configure($config);
