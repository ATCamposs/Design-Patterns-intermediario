<?php

namespace Design\Db\AbstractFactory;

class LivroNode implements AbstractEditoraB
{
    public function getTitle(): string
    {
        return 'Nodejs, javscript no backend';
    }
    public function getAuthor(): string
    {
        return 'André campos';
    }
    public function getPages(): string
    {
        return '200 paginas';
    }
}
