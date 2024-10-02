<?php

abstract class Cart {

    public function addCart(){
        return "Add to Cart";
    }
    abstract public function movedTocart(); // this has to be included in the class when the abstract class is used
}

class BuyProduct extends Cart {
    public function addCart(){
        return $this->movedTocart(); 
    }
    public function movedTocart(){
        echo "Product moved to cart";
    }
}

$product = new BuyProduct();
echo $product->addCart(); 
