<?php

namespace Design\Db\Builder2;

class Product
{
    public $table;
    public $query;

    public const MYSQL_QUERY = 'SELECT * FROM `%s`';
    public const POSTGRES_QUERY = 'SELECT * FROM %s';

    public function getQuery()
    {
        return sprintf($this->query, $this->table);
    }
}
