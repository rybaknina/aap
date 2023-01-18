<?php

namespace Nin\CommandPattern;

class Receiver
{
    protected $text;

    /**
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    public function run(): string
    {
        return $this->text;
    }

}