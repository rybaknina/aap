<?php

namespace Nin\QueryBuilder;

class Criteria
{
    public string $select;
    public string $where;

    public function select($field): static
    {
        $this->select = $field;
        return $this;
    }

    public function condition($condition): static
    {
        $this->where = $condition;
        return $this;
    }
}