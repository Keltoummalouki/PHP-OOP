<?php 

    class Articles {
        private $title;
        private $content;
        private $datePublication;
        private $author;

        public function __construct($title,$content,$datePublication,$author){
            $this->title = $title;
            $this->content = $content;
            $this->datePublication = $datePublication;
            $this->author = $author;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getContent(){
            return $this->content;
        }

        public function getDatePublication(){
            return $this->datePublication;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function setTitle(){
            $this->title = $title;
        }

        public function setContent(){
            $this->content = $content;
        }

        public function setDatePublication(){
            $this->datePublication = $datePublication;
        }

        public function setAuthor(){
            $this->author = $author;
        }

        public function displayArticle($title,$content,$datePublication,$author){
            $this->title = $title;
            $this->content = $content;
            $this->datePublication = $datePublication;
            $this->author = $author;
        }

    }

?>