<?php

class Article {
    public $title;

    public function setTitle($title)
    {
        $this->title = $title;
    }
}


$article1 = new Article();
$article1->setTitle('title 1');

$article2 = clone $article1;

$article2->setTitle('title 2');

echo $article1->title;
