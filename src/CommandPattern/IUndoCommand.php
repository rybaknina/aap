<?php

namespace Nin\CommandPattern;

interface IUndoCommand extends ICommand
{
    public function undo();
}