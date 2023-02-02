<?php 
    Class Product{

        private $name;
        private $description;
        private $price;
        private $srp;

        function getName(){
        return $this->name;
        }
        function getDescription(){
        return  $this->description; 
        }
        function getPrice(){
        return $this->price; 
        }
        function computeSRP(){
        return $this->$srp * 1.5;
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