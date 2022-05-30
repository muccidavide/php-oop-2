<?php 

    class Antiseptics extends Product{

        use AnimalAge;

        /* set aviability for stagional Antiseptics */
        public $aviability;
        public $is_natural;
        public $dosage;

        function __construct(String $name, String $animal, String $brand, String $descr, /* Float */ $price, $has_discount, Bool $is_natural, String $dosage, $animalAge) {
            parent::__construct( $name,  $animal,  $brand,  $descr,  $price,  $has_discount);

            $this->is_natural = $is_natural;
            $this->dosage = $dosage;
            $this->animalAge = $animalAge;
            $this->aviability = $this->stagionalAviability();;

        }

        function stagionalAviability(){

            $monthToday = getdate()['mon'];
            $startAviability = 5;
            $endAviability = 9;

            if($monthToday >= $startAviability && $monthToday <= $endAviability){
                return $this->aviability = true;
            }
   


        }

        /* Getters */

        public function getName()
        {
            return $this->name;
        }
    
        public function getAnimal()
        {
            return $this->animal;
        }
    
        public function getBrand()
        {
            return $this->brand;
        }
    
        public function getDescr()
        {
            return $this->descr;
        }
    
        public function getHasDiscount()
        {
            return $this->has_discount;
        }
    
        public function getDiscount()
        {
            return $this->discount;
        }

        public function getAviability()
        {
            return $this->aviability;
        }

        public function getIsNatural()
        {
            return $this->is_natural;
        }

        public function getDosage()
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
        $animalAge = $this->getAnimalAge();
        return [
            "name"=>$name,
            "animal"=>$animal,
            "brand"=>$brand,
            "description"=>$descr,
            "price"=>$price, 
            "has_discount"=>$has_discount,
            "discount_amount"=>$discount, 
            "aviability"=>$aviability,
            "is_natural"=>$is_natural,
            "dosage"=>$dosage,
            "animalAge" => $animalAge

        ];
    }


    }




?>