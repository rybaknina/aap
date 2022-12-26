<?php

namespace Nin\Factory;

use Nin\Connection\DBConnection;
use Nin\Connection\PostgreSqlConnection;
use Nin\QueryBuilder\DBQueryBuilder;
use Nin\QueryBuilder\PostgreSqlQueryBuilder;
use Nin\Record\DBRecord;
use Nin\Record\PostgreSqlRecord;

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