<?php

require __DIR__ . '/../vendor/autoload.php';

$concrete_class =  Design\Db\Singleton\Singleton::getInstance();
var_dump($concrete_class->getCounter());
var_dump($concrete_class->getCounter());


$another_concrete_class = Design\Db\Singleton\Singleton::getInstance();
var_dump($another_concrete_class->getCounter());

var_dump($concrete_class);
var_dump($another_concrete_class);

class Cliente
{
    public function __construct()
    {
        $instance = Design\Db\Singleton\Singleton::getInstance();
        var_dump($instance);
        var_dump($instance->getCounter());
    }
}

new Cliente();
