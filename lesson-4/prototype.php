<?php
class Article {
    public $title;

    public $content;

    public $author;
    public $html;

    public function __clone()
    {
        $newInstanceAuthor = new Author();
        $this->html = $this->Html();
        return $this;
    }

    private function Html() {
        return '';
    }
}


$x = 5;
$y = $x;
$x = 5;
$y = 5;


$article1 = new Article();

$article2 =  clone $article1;


