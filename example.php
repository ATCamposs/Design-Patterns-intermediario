<?php

require __DIR__ . '/vendor/autoload.php';

/*$builder = new Design\Db\Builder\MySqlBuilder();

$director = new Design\Db\Builder\UsersDirector($builder);

$sql = $director->getSqlAll();

$banks = new App\Model\Banks($builder);

$sql = $banks->getSqlAll();

var_dump($sql);*/
$pdo = new \PDO('mysql:host=localhost; dbname=designtestes', 'root', '1234');

$db = new Design\Db\Db($pdo);
$db->setDirector($director);

$data = $db->getAll()
    ->execute();

var_dump($data->fetchAll());
