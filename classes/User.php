<?php 
    require_once __DIR__ . '/CreditCard.php';
    class User {
        protected $firstname;
        protected $lastname;
        protected $creditCard;
        
        public function __construct($_firstname, $_lastname){
            $this-> name = $_firstname;
            $this-> surname = $_lastname;
        }

        public function setFirstName($_firstname){
            $this-> firstname = $_firstname;
        }

        public function getFirstName(){
            return $this-> firstname;
        }

        public function setLastName($_lastname){
            $this-> lastname = $_lastname;
        }

        public function getLastName(){
            return $this-> lastname;
        }

        public function addCreditCard($creditCard){
            $this-> creditCard = $creditCard;
        }
    }

?>