<?php 

    class Antiseptics extends Product{
        /* set aviability for stagional Antiseptics */
        public $aviability = false;
        public $is_natural;
        public $dosage;

        function __construct(String $name, String $animal, String $brand, String $descr, Float $price, Bool $has_discount, Bool $aviability, Bool $is_natural, String $dosage) {
            parent::__construct( $name,  $animal,  $brand,  $descr,  $price,  $has_discount);

            $this->is_natural = $is_natural;
            $this->dosage = $dosage;
            $this->aviability = $aviability;

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
    
        private function getHasDiscount()
        {
            return $this->has_discount;
        }
    
        private function getDiscount()
        {
            return $this->discount;
        }

        private function getAviability()
        {
            return $this->aviability;
        }

        private function getIsNatural()
        {
            return $this->is_natural;
        }

        private function getDosage()
        {
            return $this->dosage;
        }

        public function getFullInfoProduct()
    {
        $name = $this->getName();
        $animal = $this->getAnimal();
        $brand = $this->getBrand();
        $descr = $this->getDescr();
        $price = $this->price  . "€";
        $has_discount = $this->getHasDiscount();
        $discount = $this->getDiscount();
        $aviability = $this->getAviability();
        $is_natural = $this->getIsNatural();
        $dosage = $this->getDosage();
        return [
            $name,
            $animal,
            $brand,
            $descr,
            $price, 
            $has_discount,
            $discount, 
            $aviability,
            $is_natural,
            $dosage,

        ];
    }


    }




?>