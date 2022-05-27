<?php 

    class Food extends Product{

        use AnimalAge; // passa data $animalAge e funzione getter

        protected $weight;
        protected $meat;
      

        function __construct(String $name, String $animal, String $brand, String $descr, Float $price, Bool $has_discount, String $weight, Mixed $meat) {
            parent::__construct( $name,  $animal,  $brand,  $descr,  $price,  $has_discount);

            $this->weight = $weight;
            $this->meat = $meat;
            
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

        private function getWeight()
        {
            return $this->weight;
        }

        private function getMeat()
        {
            return $this->meat;
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
        $meat = $this->getMeat();
        $weight = $this->getWeight();
        $animalAge = $this->getAnimalAge();
        return [
            "name"=>$name,
            "animal"=>$animal,
            "brand"=>$brand,
            "description"=>$descr,
            "price"=>$price, 
            "has_discount"=>$has_discount,
            "discount_amount"=>$discount, 
            "meat"=>$meat,
            "weight"=>$weight,
            "animalAge" => $animalAge,

        ];

    }



    }




?>