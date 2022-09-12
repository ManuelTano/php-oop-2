<?php 
    
    require_once __DIR__ . '/Product.php';
    class Toys extends Product{
        protected $name;
        protected $material;
        protected $color;
        protected $size;

       public function __construct($_brand, $_description, $_price, $_name, $_material, $_color, $_size){
            parent::__construct($_brand, $_description, $_price);
            $this-> name = $_name;
            $this-> material = $_material;
            $this-> color = $_color;
            $this-> size = $_size;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function getName(){
            return $this-> name;
        }

        public function setMaterial($_material){
            $this-> material = $_material;
        }

        public function getMaterial(){
            return $this-> material;
        }

        public function setColor($_color){
            $this->color = $_color;
        }

        public function getColor(){
            return $this-> color;
        }

        public function setSize($_size){
            $this->size = $_size;
        }

        public function getSize(){
            return $this-> size;
        }

    }
?>