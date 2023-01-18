<?php

use Nin\CommandPattern\CopyCommand;
use Nin\CommandPattern\CutCommand;
use Nin\CommandPattern\MacrosoftWorld;
use Nin\CommandPattern\PasteCommand;
use Nin\CommandPattern\Receiver;

require_once '../../vendor/autoload.php';

// need rework. just for example command pattern
$receiver = new Receiver('hello world');
$editor = new MacrosoftWorld();
$editor->setCommand(new CopyCommand($receiver));
$editor->run();
$editor->setCommand(new CutCommand($receiver));
$editor->run();
$paste = new PasteCommand($receiver);
$editor->setCommand($paste);
$editor->run();
$paste->undo();
$editor->run();