<?php

namespace Nin\DecoratorPattern;

class ChromeNotification extends NotificationDecorator
{
    public function notify($msg)
    {
        echo __CLASS__ . " send chrome notification: $msg" . PHP_EOL;
    }
}