<?php

namespace Nin\CommandPattern;

class CutCommand implements IUndoCommand
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
        echo "cut command with " . $this->receiver->run() . PHP_EOL;
    }

    public function undo()
    {
        echo "undo cut command with " . $this->receiver->run() . PHP_EOL;
    }
}