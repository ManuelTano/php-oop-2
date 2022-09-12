<?php 

    class CreditCard {
        protected $owner;
        protected $number;
        protected $cvc;
        protected $expiringDate;
        protected $balance;

        public function __construct($_owner, $_number, $_cvc, $_expiringDate, $_balance){
            $this-> owner = $_owner;
            $this-> number = $_number;
            $this-> cvc = $_cvc;
            $this-> expiringDate = $_expiringDate;
            $this-> balance = $_balance;
        }
    }
?>