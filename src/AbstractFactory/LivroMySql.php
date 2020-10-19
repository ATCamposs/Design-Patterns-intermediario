<?php

namespace Design\Db\AbstractFactory;

class LivroMySql implements AbstractEditoraA
{
    public function getTitle(): string
    {
        return 'MySql essencial';
    }
    public function getAuthor(): string
    {
        return 'João de tal';
    }
}
