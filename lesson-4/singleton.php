<?php

class DbConnection
{
    public $connection;
    protected static $instance;

    public static function getInstance()
    {
        if(is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function __construct()
    {
        $this->connection = new PDO('root@192.186.1.1:password');
    }

    protected function __clone() {}

    protected function __wakeup() {}

    public function query($sql)
    {
        return [];
    }

}

DbConnection::getInstance()->query('INSERT table ...');
DbConnection::getInstance()->query('SELECT LAST_INSERT_ID');








class A {
    public static $message = 'a';

    public static function display()
    {
        echo static::$message;
    }
}

class B extends A {
    public static $message = 'b';
}

//A::display();
B::display();
