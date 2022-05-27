<?php 

    /* Trait per definire età animali cui è destinato il prodotto(condivisa da Food E Antiseptics) */
    trait AnimalAge{

        public $animalAge;

        public function getAnimalAge()
        {
            return $this->animalAge;
        }
    }


?>