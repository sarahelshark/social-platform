<?php
class Post {
    
    public function __construct(protected $title, protected $tags, protected $user_id) {
        $this->title = $title;
        $this->tags = $tags;
        $this->user_id = $user_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getTags() {
        return $this->tags;
    }

    public function getUserId() {
        return $this->user_id;
    }
}
?>