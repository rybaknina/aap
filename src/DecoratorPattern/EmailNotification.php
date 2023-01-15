<?php

namespace Nin\DecoratorPattern;

class EmailNotification extends NotificationDecorator
{
    public function notify($msg)
    {
        echo __CLASS__ . " send email: $msg" . PHP_EOL;
    }
}