<?php

require __DIR__ . '/vendor/autoload.php';

/*$builder = new Design\Db\Builder\MySqlBuilder();

$director = new Design\Db\Builder\UsersDirector($builder);

$sql = $director->getSqlAll();

$banks = new App\Model\Banks($builder);

$sql = $banks->getSqlAll();

var_dump($sql);
$pdo = new \PDO('mysql:host=localhost; dbname=designtestes', 'root', '1234');

$db = new Design\Db\Db($pdo);
$db->setDirector($director);

$data = $db->getAll()
    ->execute();

var_dump($data->fetchAll());
*/
$config = [
    'dsn' => 'mysql:host=localhost; dbname=designtestes',
    'user' => 'root',
    'passwd' => '1234'
];

Design\Db\DbSingleton::configure($config);
$db = Design\Db\DbSingleton::getInstance();
$db->setDirector($director);

$data = $db->getAll()
    ->execute();

var_dump($data->fetchAll());
