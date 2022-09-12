<?php 
    
    require_once __DIR__ . '/Product.php';
    class Food extends Product{
        protected $name;
        protected $weight;
        protected $type;

       public function __construct($_brand, $_description, $_price, $_name, $_weight, $_type){
            parent::__construct($_brand, $_description, $_price);
            $this-> name = $_name;
            $this-> weight = $_weight;
            $this-> type = $_type;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getName(){
            return $this-> name;
        }

        public function setWeight($_weight){
            $this-> weight = $_weight;
        }

        public function getWeight(){
            return $this-> weight;
        }

        public function setType($_type){
            $this->type = $_type;
        }

        public function getType(){
            return $this-> type;
        }

    }
?>