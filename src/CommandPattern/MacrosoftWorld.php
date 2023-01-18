<?php

namespace Nin\CommandPattern;

class MacrosoftWorld
{
    private ICommand $command;

    public function setCommand(ICommand $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}