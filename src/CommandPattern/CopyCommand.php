<?php

namespace Nin\CommandPattern;

class CopyCommand implements ICommand
{
    private $receiver;

    /**
     * @param $receiver
     */
    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        echo "copy command with " . $this->receiver->run() . PHP_EOL;
    }
}