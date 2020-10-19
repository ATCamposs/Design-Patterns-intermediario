<?php

require __DIR__ . '/../vendor/autoload.php';

//$mysql = new Design\Db\Builder2\MySqlBuilder();
$mysql = new Design\Db\Builder2\PostgresBuilder();

$result = (new Design\Db\Builder2\Director($mysql))->getQuery('users');

var_dump($result->getQuery());
