<?php

use Nin\FactoryPattern\Factory\DBFactory;
use Nin\FactoryPattern\Factory\MySqlFactory;
use Nin\FactoryPattern\Factory\OracleFactory;
use Nin\FactoryPattern\Factory\PostgreSqlFactory;
use Nin\FactoryPattern\QueryBuilder\Criteria;

require_once '../../vendor/autoload.php';

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
