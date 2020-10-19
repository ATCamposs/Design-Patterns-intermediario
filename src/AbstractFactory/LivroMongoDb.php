<?php

namespace Design\Db\AbstractFactory;

class LivroMongoDb implements AbstractEditoraB
{
    public function getTitle(): string
    {
        return 'MongoDb para inciantes';
    }
    public function getAuthor(): string
    {
        return 'André campos';
    }
    public function getPages(): string
    {
        return '100 paginas';
    }
}
