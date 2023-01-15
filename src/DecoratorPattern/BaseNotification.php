<?php

namespace Nin\DecoratorPattern;

class BaseNotification implements INotification
{
    public function notify($msg)
    {
        echo __CLASS__ . " base notification: $msg" . PHP_EOL;
    }
}