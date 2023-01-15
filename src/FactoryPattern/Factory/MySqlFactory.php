<?php

namespace Nin\FactoryPattern\Factory;

use Nin\FactoryPattern\Connection\DBConnection;
use Nin\FactoryPattern\Record\DBRecord;
use Nin\FactoryPattern\QueryBuilder\DBQueryBuilder;
use Nin\FactoryPattern\Connection\MySqlConnection;
use Nin\FactoryPattern\QueryBuilder\MySqlQueryBuilder;
use Nin\FactoryPattern\Record\MySqlRecord;


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