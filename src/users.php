<?php 

    class Users {
        protected $name;
        protected $email;

        public function __construct($name,$email){
            $this->name = $name;
            $this->email = $email;
        }

        public function getName(){
            return $this->name;
        }

        public function setName(){
            $this->name = $name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail(){
            $this->email = $email;
        }

        public function displayDetails($name,$email){
            $this->name = $name;
            $this->email = $email;
        }

    }

?>