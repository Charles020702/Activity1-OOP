<?php 
    Class Product{

        private $name;
        private $description;
        private $price;
        private $srp;

        function getName(){
            $this->name;
            $this->description;
            $this->price;
        }

        function setName($name = null){
        $this->name = $name;
        }
        function setDescription($description = null){
        $this->description = $description; 
        }
        function setPrice($price = null){
        $this->price = $price;
        }        

    }


?>