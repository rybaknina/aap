<?php

namespace Nin\Tree;

use RuntimeException;

class BinaryHeap
{
    protected array $heap;

    public function __construct()
    {
        $this->heap = array();
    }

    public function isEmpty(): bool
    {
        return empty($this->heap);
    }

    public function count(): int
    {
        return count($this->heap) - 1;
    }

    public function extract()
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Heap is empty');
        }
        $root = array_shift($this->heap);
        if (!$this->isEmpty()) {
            $last = array_pop($this->heap);
            array_unshift($this->heap, $last);
            $this->adjust(0);
        }
        return $root;
    }

    public function compare($item1, $item2): int
    {
        if ($item1 === $item2) {
            return 0;
        }
        return ($item1 > $item2 ? 1 : -1);
    }

    protected function isLeaf($node)
    {
        return ((2 * $node) + 1) > $this->count();
    }

    protected function adjust($root)
    {
        if (!$this->isLeaf($root)) {
            $left = (2 * $root) + 1; // left child
            $right = (2 * $root) + 2; // right child
            $h = $this->heap;
            if (
                (isset($h[$left]) &&
                    $this->compare($h[$root], $h[$left]) < 0)
                || (isset($h[$right]) &&
                    $this->compare($h[$root], $h[$right]) < 0)
            ) {
                if (isset($h[$left]) && isset($h[$right])) {
                    $j = ($this->compare($h[$left], $h[$right]) >= 0)
                        ? $left : $right;
                } else if (isset($h[$left])) {
                    $j = $left; // left child only
                } else {
                    $j = $right; // right child only
                }
                list($this->heap[$root], $this->heap[$j]) =
                    array($this->heap[$j], $this->heap[$root]);
                $this->adjust($j);
            }
        }
    }

    public function insert($item)
    {
        $this->heap[] = $item;
        $place = $this->count();
        $parent = floor($place / 2);
        while (
            $place > 0 && $this->compare(
                $this->heap[$place], $this->heap[$parent]) >= 0
        ) {
            // swap places
            list($this->heap[$place], $this->heap[$parent]) =
                array($this->heap[$parent], $this->heap[$place]);
            $place = $parent;
            $parent = floor($place / 2);
        }
    }
}