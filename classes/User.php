<?php 
    require_once __DIR__ . '/CreditCard.php';

    class User {

        protected $cart;
        
        public function __construct(){
            $this-> setCart();
        }

        public function getCart(){
            return $this->cart;
        }

        protected function setCart(){
            $this->cart = new Cart();
        }

        public function addToCart($product) {
            $this->cart->addProduct($product);
        }

    }

?>