<?php

namespace Nin\Tree\RBTree;

class Node
{
    public function __construct(public       $value = null,
                                public ?Node $left = null,
                                public ?Node $right = null)
    {

    }
}