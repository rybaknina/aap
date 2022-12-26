<?php

namespace Nin\Factory;

use Nin\Connection\DBConnection;
use Nin\Connection\MySqlConnection;
use Nin\QueryBuilder\DBQueryBuilder;
use Nin\QueryBuilder\MySqlQueryBuilder;
use Nin\Record\DBRecord;
use Nin\Record\MySqlRecord;

class MySqlFactory implements DBFactoryInterface
{
    public function createConnection(): DBConnection
    {
        return new MySqlConnection();
    }

    public function createRecord(): DBRecord
    {
        return new MySqlRecord();
    }

    public function createQueryBuilder(): DBQueryBuilder
    {
        return new MySqlQueryBuilder();
    }
}