<?php 

    class Food extends Product{

        public $weight;
        public $meat;

        function __construct(String $name, String $animal, String $brand, String $descr, Float $price, Bool $has_discount, String $discount, String $weight, Mixed $meat) {
            parent::__construct( $name,  $animal,  $brand,  $descr,  $price,  $has_discount,  $discount);

            $this->weight = $weight;
            $this->meat = $meat;

        }


    }




?>