<?php

namespace Nin\FactoryPattern\QueryBuilder;

class MySqlQueryBuilder implements DBQueryBuilder
{

    public function query(Criteria $criteria)
    {
        echo __CLASS__ . " with criteria select " .
            $criteria->select . " where " . $criteria->where . PHP_EOL;
    }
}