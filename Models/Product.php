<?php

class Product{

    protected $name;
    protected $animal;
    protected $brand;
    protected $descr;
    protected $price;
    protected $has_discount = false;
    protected $discount = 20;

    public function __construct(String $name, String $animal, String $brand, String $descr, Float $price, Bool $has_discount ) {
        $this->name = $name;
        $this->animal = $animal;
        $this->brand = $brand;
        $this->descr = $descr;
        $this->price = $price . "€";
        $this->has_discount = $has_discount;
    }
    
    private function getName()
    {
        return $this->name;
    }



}





?>