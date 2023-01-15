<?php

namespace Nin\FactoryPattern\QueryBuilder;

interface DBQueryBuilder
{
    public function query(Criteria $criteria);
}