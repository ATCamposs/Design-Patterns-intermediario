<?php

namespace Design\Db\AbstractFactory;

class LivroPHP implements AbstractEditoraA
{
    private $title = null;
    private $author = null;

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }
    public function getTitle(): string
    {
        return 'PHP essencial';
    }
    public function getAuthor(): string
    {
        return 'Fulano de tal';
    }
}
