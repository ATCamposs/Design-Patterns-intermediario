<?php

namespace Design\Db\AbstractFactory;

class EditoraA implements AbstractFactory
{
    private $linguagem;
    private $banco;
    public function __construct()
    {
        $this->linguagem = new LivroPHP();
        $this->banco = new LivroMySql();
    }
    public function makeLivroLinguagem()
    {
        $this->linguagem->setTitle('Php Essencial');
        $this->linguagem->setAuthor('Fulano de tal');
        return $this->linguagem;
    }

    public function makeLivroBanco()
    {
        return $this->banco;
    }
}
