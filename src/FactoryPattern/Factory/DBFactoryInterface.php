<?php

namespace Nin\FactoryPattern\Factory;


use Nin\FactoryPattern\Connection\DBConnection;
use Nin\FactoryPattern\QueryBuilder\DBQueryBuilder;
use Nin\FactoryPattern\Record\DBRecord;

interface DBFactoryInterface
{
    public function createConnection(): DBConnection;
    public function createRecord(): DBRecord;
    public function createQueryBuilder(): DBQueryBuilder;
}