<?php

class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    // method
    public function setPublished() {
        $this->published = true;
    }
    public function isPublished() {
        return $this->published;
    }
}

$article1 = new Article("Title", "Content");
$article2 = new Article("Title1", "Content1");

$article1->setPublished(true);

echo var_dump($article1 -> isPublished(), true);
echo var_dump($article2 -> isPublished(), true);
