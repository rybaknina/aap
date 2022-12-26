<?php

namespace Nin\QueryBuilder;

interface DBQueryBuilder
{
    public function query(Criteria $criteria);
}