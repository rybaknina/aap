<?php

namespace Nin\FactoryPattern\QueryBuilder;

class Criteria
{
    public $select;
    public $where;

    public function select($field): Criteria
    {
        $this->select = $field;
        return $this;
    }

    public function condition($condition): Criteria
    {
        $this->where = $condition;
        return $this;
    }
}