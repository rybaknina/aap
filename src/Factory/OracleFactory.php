<?php

namespace Nin\Factory;

use Nin\Connection\DBConnection;
use Nin\Connection\OracleConnection;
use Nin\QueryBuilder\DBQueryBuilder;
use Nin\QueryBuilder\OracleQueryBuilder;
use Nin\Record\DBRecord;
use Nin\Record\OracleRecord;

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