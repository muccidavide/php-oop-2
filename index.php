<?php

/*
Classe Main: Product(name, animal, brand, descr, price, has_discount, discount)
Product Sub-Class: Food(weight,meat). Antiseptics(aviability,is_natural,dosage)
*/
include __DIR__ . "/Models/User.php";
include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Food.php";
include __DIR__ . "/Models/Antiseptics.php";
/* Prodotto generico */
$lettiera_cats_best = new Product("Lettiera Cat's Best Original 7L", "Cat", "Cat's Best", "Cat's Best Original è una lettiera agglomerante 100% naturale per gatti, a base di fibre di legno attive trattate tecnologicamente per l'assorbimento di liquidi e odori.", 8.90, $user_gino->has_discount);
/* Prodotti Sottoclassi */
$felix_ghiottonerie = new Food("Felix Le Ghiottonerie Multipack", "Cat", "Felix", "Felix Le Ghiottonerie è un alimento completo, ideale per soddisfare le esigenze nutrizionali ", 6.90,$user_gino->has_discount, "80gr", "Manzo");
$combo_gatto = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90,$user_paolo->has_discount, true, true, "2 volte al mese");
$combo_gatto_gino = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90,$user_gino->has_discount, true, true, "2 volte al mese");
$product= [$lettiera_cats_best, $felix_ghiottonerie, $combo_gatto];

/* Check Getter & Setter */

$info_felix_ghiottonerie = $felix_ghiottonerie->getFullInfoProduct();
$info_combo_gatto = $combo_gatto->getFullInfoProduct();

/* Check Applicazione sconto in base all'utente */

var_dump($combo_gatto, $combo_gatto_gino );


?>

