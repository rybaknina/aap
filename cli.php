<?php

use Nin\Factory\DBFactory;
use Nin\Factory\OracleFactory;
use Nin\Factory\PostgreSqlFactory;
use Nin\QueryBuilder\Criteria;
use Nin\Factory\MySqlFactory;

require_once __DIR__ . '/vendor/autoload.php';

$factory = new MySqlFactory();
$db = new DBFactory($factory);
$db->connection();
$array = ['lastname', 'email', 'phone'];
$db->record($array);
$criteria = new Criteria();
$criteria->select('*');
$criteria->condition('id = 1');
$db->query($criteria);

echo PHP_EOL;

$oracleFactory = new OracleFactory();
$oracleDb = new DBFactory($oracleFactory);
$oracleDb->connection();
$oracleDb->record($array);
$oracleDb->query($criteria);

echo PHP_EOL;

$psqlFactory = new PostgreSqlFactory();
$psqlDb = new DBFactory($psqlFactory);
$psqlDb->connection();
$psqlDb->record($array);
$psqlDb->query($criteria);
