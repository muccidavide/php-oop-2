<?php
class Product
{

    protected $name;
    protected $animal;
    protected $brand;
    protected $descr;
    protected $price;
    protected $has_discount;
    protected $discount = 0.2;

    function __construct(String $name, String $animal, String $brand, String $descr, /* Float */ $price, Bool $has_discount)
    {
        $this->name = $name;
        $this->animal = $animal;
        $this->brand = $brand;
        $this->descr = $descr;
        $this->price = $this->setPrice($has_discount, $price);
        $this->has_discount = $has_discount;
    }

    /* set 20% discount if has_discount is true */
    
    public function setPrice($has_discount, $price)
    {
    /*  if (!is_numeric($price)) {
        throw new Exception('Is not a number');
    } */
    
    if ($has_discount) {
        return $price - ($price * $this->discount);
    } else {
        return $price;
    }
}
}
