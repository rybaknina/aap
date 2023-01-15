<?php

namespace Nin\FactoryPattern\Record;

class MySqlRecord implements DBRecord
{

    public function record($params)
    {
        $record = implode(", ", $params);
        echo __CLASS__ . " with params " . $record . " from " . PHP_EOL;
    }
}