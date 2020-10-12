<?php

namespace Design\Db;

use PHPUnit\Framework\TestCase;

class DbTest extends TestCase
{
    public function testTestarClasseInstanciando()
    {
        $db = new Db();
        $this->assertInstanceOf('Design\Db\Db', $db);
    }
}
