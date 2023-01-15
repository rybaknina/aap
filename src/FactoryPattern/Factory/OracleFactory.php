<?php

namespace Nin\FactoryPattern\Factory;

use Nin\FactoryPattern\Connection\DBConnection;
use Nin\FactoryPattern\Record\DBRecord;
use Nin\FactoryPattern\QueryBuilder\DBQueryBuilder;
use Nin\FactoryPattern\Connection\OracleConnection;
use Nin\FactoryPattern\QueryBuilder\OracleQueryBuilder;
use Nin\FactoryPattern\Record\OracleRecord;

class OracleFactory implements DBFactoryInterface
{

    public function createConnection(): DBConnection
    {
        return new OracleConnection();
    }

    public function createRecord(): DBRecord
    {
        return new OracleRecord();
    }

    public function createQueryBuilder(): DBQueryBuilder
    {
        return new OracleQueryBuilder();
    }
}