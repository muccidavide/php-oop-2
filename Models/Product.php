<?php

class Product{

    protected $name;
    protected $animal;
    protected $brand;
    protected $descr;
    protected $price;
    protected $has_discount = false;
    protected $discount = 20;

    function __construct(String $name, String $animal, String $brand, String $descr, Float $price, Bool $has_discount ) {
        $this->name = $name;
        $this->animal = $animal;
        $this->brand = $brand;
        $this->descr = $descr;
        $this->price = $price;
        $this->has_discount = $has_discount;
    }

    private function setPrice()
    {
        if($this->has_discount){
            return $this->price - ($this->price * $this->discount / 100);
        } else {
            return $this->price;
        }
     
    }
    
    private function getName()
    {
        return $this->name;
    }

    private function getAnimal()
    {
        return $this->animal;
    }

    private function getBrand()
    {
        return $this->brand;
    }

    private function getDescr()
    {
        return $this->descr;
    }

    private function getPrice()
    {
        return $this->setPrice();
    }

    private function getHasDiscount()
    {
        return $this->has_discount;
    }

    private function getDiscount()
    {
        return $this->discount;
    }

    public function getFullInfoProduct()
    {
        $name = $this->getName();
        $animal = $this->getAnimal();
        $brand = $this->getBrand();
        $descr = $this->getDescr();
        $price = $this->getPrice()  . "€";
        $has_discount = $this->getHasDiscount();
        $discount = $this->getDiscount();
        return [
            $name,
            $animal,
            $brand,
            $descr,
            $price,
            $has_discount,
            $discount

        ];
    }

}

?>