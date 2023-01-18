<?php

namespace Nin\ObserverPattern;

use SplSubject;

class JobSeeker implements \SplObserver
{
    private $name;
    private $email;
    private $seniority;
    private $position;

    /**
     * @param $name
     * @param $email
     * @param $seniority
     * @param $position
     */
    public function __construct($name, $email, $seniority, $position)
    {
        $this->name = $name;
        $this->email = $email;
        $this->seniority = $seniority;
        $this->position = $position;
    }


    public function update(SplSubject $subject): void
    {
        echo "sent to $this->email for $this->name with $this->seniority" .
            " notification about $this->position" .
            " last updates " . PHP_EOL;
    }
}