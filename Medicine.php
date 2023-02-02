<?php require_once "Product.php"; 

    Class Medicine extends Product {
        private $dose;
        private $type;
        private $expirationdate;
        
        function getDose(){
        return $this->dose;
        }
        function getType(){
        return $this->type;
        }
        function getExpirationDate(){
        return $this->expirationdate;
        }

        function setDose($dose){
        $this->dose = $dose;
        }
        function setType($type){
        $this->type = $type;
        }
        function setExpirationDate($expirationdate){
        $this->expirationdate = $expirationdate;
        }

       
        }

?>