<?php

namespace Design\Db\FactoryMethod;

interface CreatorInterface
{
    public function factoryMethod(ProductInterface $product): ProductInterface;
}
