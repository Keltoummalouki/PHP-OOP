<?php 

    require_once 'src/article.php';

    class Author extends users {
        private $biography;

        public function __construct($name,$email,$biography){
            //initialisation prop heritage
            // ::parent __construct($name,$email);
            $this->name = $name;
            $this->email = $email;
            $this->biography = $biography;
        }

        public function getBiography(){
            return $this->biography;
        }

        public function setBiography(){
            $this->biography = $biography;
        }

        public function displayAuthor($name,$email,$biography){
            $this->name = $name;
            $this->email = $email;
            $this->biography = $biography;
        }

        public function createArticle($newTitle,$newContent){
            $this->title = $newTitle;
            $this->content = $newContent;
        }



        
    }

?>