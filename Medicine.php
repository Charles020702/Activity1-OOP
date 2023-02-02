<?php require_once "Product.php"; 

    Class Medicine extends Product {
        private $dose;
        private $type;
        private $expirationdate;
        
        function getDose(){
        $this->dose;
        }
        function getType(){
        $this->type;
        }
        function getExpirationDate(){
        $this->expirationdate
        }
        function setDose(){
        $this->dose = $dose;
        }
        function setType(){
        $this->type = $type;
        }
        function setExpirationDate(){
        $this->expirationdate = $expirationdate;
        }
    }

?>