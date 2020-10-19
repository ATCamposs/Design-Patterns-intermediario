<?php

require __DIR__ . '/../vendor/autoload.php';

use Design\Db\FactoryMethod\Circle;
use Design\Db\FactoryMethod\Triangle;

class Client
{
    public function __construct()
    {
        $circle = (new Design\Db\FactoryMethod\ConcreteCreator())->factoryMethod(new Circle());
        echo $circle->getImage();

        echo PHP_EOL;

        $triangle = (new Design\Db\FactoryMethod\ConcreteCreator())->factoryMethod(new Triangle());
        echo $triangle->getImage();
    }
}

new Client();
