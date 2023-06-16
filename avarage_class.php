<?php
class Comment {
    private $author;
    private $content;
    private $timestamp;

    public function __construct($author, $content) {
        $this->author = $author;
        $this->content = $content;
        $this->timestamp = time();
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getContent() {
        return $this->content;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }
}


$comment1 = new Comment("John Doe", "This is a great article!");
$comment2 = new Comment("Jane Smith", "I enjoyed reading this.");


echo "Comment 1: " . $comment1->getContent() . " - by " . $comment1->getAuthor() . "<br>";
echo "Comment 2: " . $comment2->getContent() . " - by " . $comment2->getAuthor() . "<br>";


echo "Comment 1 timestamp: " . $comment1->getTimestamp() . "<br>";
echo "Comment 2 timestamp: " . $comment2->getTimestamp() . "<br>";