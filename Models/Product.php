<?php

class Product{

    protected $name;
    protected $animal;
    protected $brand;
    protected $descr;
    protected $price;
    protected $has_discount;
    protected $discount = 20;

    /* set 20% discount if has_discount is true */

    private function setPrice($has_discount,$price)
    {
        if($has_discount){
            return $price - ($price * $this->discount / 100);
        } else {
            return $price;
        }
     
    }

    function __construct(String $name, String $animal, String $brand, String $descr, Float $price,Bool $has_discount ) {
        $this->name = $name;
        $this->animal = $animal;
        $this->brand = $brand;
        $this->descr = $descr;
        $this->price = $this->setPrice($has_discount,$price) . "€";
        $this->has_discount = $has_discount;
    }

}

?>