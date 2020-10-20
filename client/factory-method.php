<?php

namespace Design\Db\FactoryMethod;

require __DIR__ . '/../vendor/autoload.php';

use Design\Db\FactoryMethod\Circle;
use Design\Db\FactoryMethod\Triangle;

class Client
{
    public function __construct()
    {
        $circle = (new ConcreteCreator())->factoryMethod(new Circle());
        echo $circle->getImage();

        echo PHP_EOL;

        $triangle = (new ConcreteCreator())->factoryMethod(new Triangle());
        echo $triangle->getImage();
    }
}

new Client();
