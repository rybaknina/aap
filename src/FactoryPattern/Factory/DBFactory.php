<?php

namespace Nin\FactoryPattern\Factory;

use Nin\FactoryPattern\QueryBuilder\Criteria;

class DBFactory
{
    protected $connection;
    protected $record;
    protected $queryBuilder;

    public function __construct(DBFactoryInterface $factory)
    {
        $this->connection = $factory->createConnection();
        $this->record = $factory->createRecord();
        $this->queryBuilder = $factory->createQueryBuilder();
    }

    public function connection() {
        return $this->connection->connection();
    }

    public function record($params) {
        $this->record->record($params);
    }

    public function query(Criteria $criteria) {
        return $this->queryBuilder->query($criteria);
    }
}