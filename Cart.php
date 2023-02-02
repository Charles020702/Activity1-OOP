<?php 
require_once "index.php"; 
require_once "Product.php";

class Cart extends Medicine{
    private $cartItems = array();

    function addtoCart($item){
        $this->cartItems[]= $item;
    }
    function viewCart(){
        $arrCartItems = $this->cartItems;
        foreach (arrCartItems as $key =>$item){
            echo
                '
                <ul>
                    li
                '
        }
    } 
}
?>