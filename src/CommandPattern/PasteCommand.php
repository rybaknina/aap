<?php

namespace Nin\CommandPattern;

class PasteCommand implements IUndoCommand
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
        echo "paste command with " . $this->receiver->run() . PHP_EOL;
    }

    public function undo()
    {
        echo "undo paste command with " . $this->receiver->run() . PHP_EOL;
    }
}