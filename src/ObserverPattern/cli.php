<?php

use Nin\ObserverPattern\HandHunter;
use Nin\ObserverPattern\JobSeeker;

require_once '../../vendor/autoload.php';

$subject = new HandHunter();
$seeker1 = new JobSeeker("Person1", "person1@mail.com", 2, "PHP");
$seeker2 = new JobSeeker("Person2", "person2@mail.com", 5, "PHP");

$subject->attach($seeker1);
$subject->attach($seeker2);
$subject->notify();
echo PHP_EOL . "Job seeker detached" . PHP_EOL;
$subject->detach($seeker1);
$subject->notify();

