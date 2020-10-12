<?php

namespace Design\Db\QueryBuilder;

interface Strategy
{
    public function table(string $table): Strategy;
    public function select($collumns = '*'): Strategy;
    public function getQuery(): Strategy;
}
