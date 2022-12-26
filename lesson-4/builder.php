<?php

class Criteria
{
    public $select;
    public $where;
}

class CriteriaBuilder
{
    protected $criteria;

    public function __construct(Criteria $criteria)
    {
        $this->criteria = $criteria;
    }

    public function select($field)
    {
        $this->criteria->select = $field;
        return $this;
    }

    public function condition($condition)
    {
        $this->criteria->where = $condition;
        return $this;
    }

    public function getCriteria()
    {
        return $this->criteria;
    }
}

$criteria = (new CriteriaBuilder(
    new Criteria()
));
$criteria->select('*');
$criteria->condition('id = 1');
$criteria->getCriteria();


