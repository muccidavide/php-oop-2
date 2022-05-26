<?php 

/* 
Prodotti Per Animali:
prop genreali:
- nome
- prezzo
- sconto 

SottoClassi:
-cibo
-giochi
-cucce
-etc

Sconto 20% su tutti i prodotti se utente non è loggato

*/

include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Food.php";
include __DIR__ . "/Models/Toys.php";

$lettiera_cats_best = new Product("Lettiera Cat's Best Original 7L", "Cat", "Cat's Best", "Cat's Best Original è una lettiera agglomerante 100% naturale per gatti, a base di fibre di legno attive trattate tecnologicamente per l'assorbimento di liquidi e odori.", 8.90, true); 
$felix_ghiottonerie = new Food("Felix Le Ghiottonerie Multipack", "Cat", "Felix", "Felix Le Ghiottonerie è un alimento completo, ideale per soddisfare le esigenze nutrizionali ", 6.90, true, "85gr", "Manzo","Pesce");


var_dump($lettiera_cats_best->getFullInfoProduct());
var_dump($felix_ghiottonerie->getFullInfoProduct())

?>