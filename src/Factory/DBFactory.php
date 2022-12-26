<?php

namespace Nin\Factory;

use Nin\Connection\DBConnection;
use Nin\QueryBuilder\Criteria;
use Nin\QueryBuilder\DBQueryBuilder;
use Nin\Record\DBRecord;

class DBFactory
{
    protected DBConnection $connection;
    protected DBRecord $record;
    protected DBQueryBuilder $queryBuilder;

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