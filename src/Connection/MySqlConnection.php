<?php

namespace Nin\Connection;

class MySqlConnection implements DBConnection
{
    public function connection()
    {
        echo "Connection with " . __CLASS__ . PHP_EOL;
    }
}