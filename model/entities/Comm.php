<?php

class Comm {

    private $_author;
    private $_comment;
    private $_date;
    private $_id;
    private $_postId;

    public function __construct() {

    }

    public function getAuthor() {

        return $this->_author;

    }

    public function getComment() {

        return $this->_comment;

    }

    public function getDate() {

        return $this->_date;

    }

    public function getId() {

        return $this->_id;
        
    }

    public function getPostId() {

        return $this->_postId;

    }

    public function setId($id) {

        $id = (int)$id;
        if ($id > 0) {
            $this->_id = $id;
        }

    }

    public function setAuthor($author) {
   
        if (is_string($author)) {
            $this->_author = $author;
        }        

    }

    public function setComment($comment) {

        if (is_string($comment)) {
            $this->_comment = $comment;
        }

    }

    public function setDate($date) {

        //format datetime
        $this->_date = $date;

    }

    public function setPostId($postId) {

        $postId = (int)$postId;
        if ($postId > 0) {
            $this->_postId = $postId;
        }

    }
    
}