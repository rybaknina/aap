<?php

namespace Nin\FactoryPattern\Factory;

use Nin\FactoryPattern\Connection\DBConnection;
use Nin\FactoryPattern\Record\DBRecord;
use Nin\FactoryPattern\QueryBuilder\DBQueryBuilder;
use Nin\FactoryPattern\Connection\PostgreSqlConnection;
use Nin\FactoryPattern\QueryBuilder\PostgreSqlQueryBuilder;
use Nin\FactoryPattern\Record\PostgreSqlRecord;

class PostgreSqlFactory implements DBFactoryInterface
{

    public function createConnection(): DBConnection
    {
        return new PostgreSqlConnection();
    }

    public function createRecord(): DBRecord
    {
        return new PostgreSqlRecord();
    }

    public function createQueryBuilder(): DBQueryBuilder
    {
        return new PostgreSqlQueryBuilder();
    }
}