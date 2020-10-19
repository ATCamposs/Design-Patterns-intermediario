<?php

namespace Design\Db\Builder2;

interface BuilderInterface
{
    public function setTable(string $table);
    public function setQuery();
    public function getResult(): Product;
}
