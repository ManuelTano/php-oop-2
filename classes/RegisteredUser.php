<?php 

    require_once __DIR__ . '/User.php';

    class RegisteredUser extends User{
        protected $nickname;
        protected $email;
        protected $password;

        public function __construct($_name, $_surname, $_nickname, $_email, $_password){
            parent::__construct($_name, $_surname);
            $this->nickname = $_nickname;
            $this->email = $_email;
            $this->password = $_password;
        }

        public function setNickname($_nickname){
            $this->nickname = $_nickname;
        }

        public function getNickname(){
            return $this->nickname;
        }

        public function setEmail($_email){
            $this->email = $_email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword($_password){
            $this->password = $_password;
        }

        public function getPassword(){
            return $this->password;
        }
    }
?>