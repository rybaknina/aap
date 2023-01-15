<?php

namespace Nin\FactoryPattern\Connection;

class PostgreSqlConnection implements DBConnection
{

    public function connection()
    {
        echo "Connection with " . __CLASS__ . PHP_EOL;
    }
}