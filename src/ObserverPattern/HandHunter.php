<?php

namespace Nin\ObserverPattern;

use SplObserver;

class HandHunter implements \SplSubject
{
    protected $observers = [];

    public function attach(SplObserver $observer): void
    {
        $id = spl_object_hash($observer);
        $this->observers[$id] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $id = spl_object_hash($observer);
        if (isset($this->observers[$id])) {
            unset($this->observers[$id]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}