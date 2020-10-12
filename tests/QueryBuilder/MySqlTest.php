<?php

namespace Design\Db\QueryBuilder;

use PHPUnit\Framework\TestCase;

class MySqlTest extends TestCase
{
    public function testSelectQuery()
    {
        $sql = new MySql();
        $query = $sql->table('users')
            ->select()
            ->getQuery();

        $this->assertEquals('SELECT * FROM `users`;', $query);
    }

    public function testSelectQueryComColunasEmFormatoTexto()
    {
        $sql = new MySql();
        $query = $sql->table('users')
            ->select('username, password')
            ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);
    }

    public function testSelectQueryComColunasEmFormatoArray()
    {
        $sql = new MySql();
        $query = $sql->table('users')
            ->select(['username', 'password'])
            ->getQuery();

        $this->assertEquals('SELECT `username`, `password` FROM `users`;', $query);
    }
}