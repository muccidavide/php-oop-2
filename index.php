<?php 

/*
Classe Main: Product(name, animal, brand, descr, price, has_discount, discount)
Product Sub-Class: Food(weight,meat). Antiseptics(aviability,is_natural,dosage)
*/

include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Food.php";
include __DIR__ . "/Models/Antiseptics.php";

$lettiera_cats_best = new Product("Lettiera Cat's Best Original 7L", "Cat", "Cat's Best", "Cat's Best Original è una lettiera agglomerante 100% naturale per gatti, a base di fibre di legno attive trattate tecnologicamente per l'assorbimento di liquidi e odori.", 8.90, true); 
$felix_ghiottonerie = new Food("Felix Le Ghiottonerie Multipack", "Cat", "Felix", "Felix Le Ghiottonerie è un alimento completo, ideale per soddisfare le esigenze nutrizionali ", 6.90, true, 20,"80gr", "Manzo");
$combo_gatto = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90, true , true, true, "2 volte al mese");


var_dump($lettiera_cats_best);
var_dump($felix_ghiottonerie);
var_dump($combo_gatto);
var_dump($felix_ghiottonerie->getFullInfoProduct())

?>