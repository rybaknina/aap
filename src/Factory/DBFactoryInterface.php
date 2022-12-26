<?php

namespace Nin\Factory;

use Nin\Connection\DBConnection;
use Nin\QueryBuilder\DBQueryBuilder;
use Nin\Record\DBRecord;

interface DBFactoryInterface
{
    public function createConnection(): DBConnection;
    public function createRecord(): DBRecord;
    public function createQueryBuilder(): DBQueryBuilder;
}