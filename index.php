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

$lettiera_cats_best = new Product("Lettiera Cat's Best Original 7L", "Cat", "Cat's Best", "Cat's Best Original è una lettiera agglomerante 100% naturale per gatti, a base di fibre di legno attive trattate tecnologicamente per l'assorbimento di liquidi e odori.", 8.90, false); 

var_dump($lettiera_cats_best);

?>