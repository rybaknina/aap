<?php

namespace Nin\Connection;

class OracleConnection implements DBConnection
{

    public function connection()
    {
        echo "Connection with " . __CLASS__ . PHP_EOL;
    }
}