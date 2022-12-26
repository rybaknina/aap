
<?php

interface RepositoryInterface {
    public function getOne(): array;
    public function getDb(): StorageInterface;
}

interface StorageInterface {
    public function query(): array;
}

 class MysqlRepository implements RepositoryInterface {

     public function getOne(): array
     {
         $db = $this->getDb();
         return $db->query();
     }

     public function getDb(): StorageInterface {
         return new MysqlStorage();
     }
 }

class RedisRepository implements RepositoryInterface {

    public function getOne(): array
    {
        $db = $this->getDb();
        return $db->query();
    }

    public function getAll(): array
    {
        $db = $this->getDb();
        return $db->query();
    }

    public function getDb(): StorageInterface {
        return new RedisStorage();
    }
}

 class MysqlStorage implements StorageInterface {

     public function query(): array
     {
        return [];
     }
 }

class RedisStorage implements StorageInterface {

    public function query(): array
    {
        return [];
    }
}