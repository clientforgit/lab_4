<?php

include("avarage_class.php");
class Reply extends Comment {
    private $parentComment;

    public function __construct($author, $content, $parentComment) {
        parent::__construct($author, $content);
        $this->parentComment = $parentComment;
    }

    public function getParentComment() {
        return $this->parentComment;
    }
}
$comment1 = new Comment("John Doe", "This is a great article!");

$reply = new Reply("Sam Brown", "Thank you!", $comment1);

echo "Reply: " . $reply->getContent() . " - by " . $reply->getAuthor() . "<br>";
echo "Parent Comment: " . $reply->getParentComment()->getContent() . " - by " . $reply->getParentComment()->getAuthor() . "<br>";