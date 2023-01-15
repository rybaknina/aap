<?php

namespace Nin\DecoratorPattern;

class SmsNotification extends NotificationDecorator
{
    public function notify($msg)
    {
        echo __CLASS__ . " send sms: $msg" . PHP_EOL;
    }
}