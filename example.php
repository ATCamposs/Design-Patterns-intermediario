<?php

require __DIR__ . '/vendor/autoload.php';

$builder = new Design\Db\Builder\SqlBuilder();
$director = new Design\Db\Builder\UsersDirector($builder);

$sql = $director->getSqlAll();

var_dump($sql);
