<?php 

    class Admin extends users{
        private $role;

        public function __construct($name,$email,$role){
            //initialisation prop heritage
            $this->name = $name;
            $this->email = $email;
            $this->role = $role;
        }

        public function getRole(){
            return $this->role;
        }

        public function setRole(){
            $this->role = $role;
        }

        public function displayRole($name,$email,$role){
            $this->name = $name;
            $this->email = $email;
            $this->role = $role;
        }


    }

    ?>