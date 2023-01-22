<?php

namespace Nin\EnterpriseAppTemplate\Repository\Repository;

use ArrayObject;
use SplObjectStorage;

class IdentityMap
{
    /**
     * @var ArrayObject
     */
    protected ArrayObject $idToObject;

    /**
     * @var SplObjectStorage
     */
    protected SplObjectStorage $objectToId;

    public function __construct()
    {
        $this->objectToId = new SplObjectStorage();
        $this->idToObject = new ArrayObject();
    }

    /**
     * @param integer $id
     * @param mixed $object
     */
    public function set(int $id, mixed $object)
    {
        $this->idToObject[$id] = $object;
        $this->objectToId[$object] = $id;
    }

    /**
     * @param mixed $object
     * @return integer
     * @throws OutOfBoundsException
     */
    public function getId(mixed $object): int
    {
        if (false === $this->hasObject($object)) {
            throw new OutOfBoundsException();
        }

        return $this->objectToId[$object];
    }

    /**
     * @param integer $id
     * @return boolean
     */
    public function hasId(int $id): bool
    {
        return isset($this->idToObject[$id]);
    }

    /**
     * @param mixed $object
     * @return boolean
     */
    public function hasObject(mixed $object): bool
    {
        return isset($this->objectToId[$object]);
    }

    /**
     * @param integer $id
     * @return object
     * @throws OutOfBoundsException
     */
    public function getObject(int $id): object
    {
        if (false === $this->hasId($id)) {
            throw new OutOfBoundsException();
        }
        echo PHP_EOL . "get object by id " . $id . PHP_EOL;
        return $this->idToObject[$id];
    }
}