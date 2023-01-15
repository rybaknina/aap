<?php

namespace Nin\DecoratorPattern;

abstract class NotificationDecorator implements INotification
{
    protected $notification;

    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }
}