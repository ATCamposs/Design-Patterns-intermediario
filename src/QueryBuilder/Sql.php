<?php

namespace Design\Db\QueryBuilder;

class Sql implements Strategy
{
    public function table(string $table): Strategy
    {
    }
    public function select($collumns = '*'): Strategy
    {
    }
    public function getQuery(): Strategy
    {
    }
}
