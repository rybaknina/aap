<?php

use Nin\DecoratorPattern\BaseNotification;
use Nin\DecoratorPattern\ChromeNotification;
use Nin\DecoratorPattern\EmailNotification;
use Nin\DecoratorPattern\SmsNotification;

require_once '../../vendor/autoload.php';

$msg = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, omnis?';
$sms = new SmsNotification(new BaseNotification());
$email = new EmailNotification($sms);
$chrome = new ChromeNotification($email);
$sms->notify($msg);
$email->notify($msg);
$chrome->notify($msg);