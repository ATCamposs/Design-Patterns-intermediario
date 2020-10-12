<?php

namespace Design\Db;

use Design\Db\Builder\BuilderInterface;
use Design\Db\Builder\DirectorAbstract;

abstract class ModelAbstract extends DirectorAbstract
{
    protected $db;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->db = \Design\Db\DbSingleton::getInstance();
        $driver = $this->db->getPdo()
            ->getAttribute(\PDO::ATTR_DRIVER_NAME);

        if ($driver == 'mysql') {
            $builder = new Builder\MySqlBuilder();
        } else {
            $builder = new Builder\SqlBuilder();
        }
        parent::__construct($builder);

        $this->db->setDirector($this);
    }

    public function getAll()
    {
        return $this->db->getAll()
            ->execute();
    }
}
