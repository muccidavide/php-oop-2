<?php

/*
Classe Main: Product(name, animal, brand, descr, price, has_discount, discount)
Product Sub-Class: Food(weight,meat). Antiseptics(aviability,is_natural,dosage)
*/
include __DIR__ . "/Models/User.php";
include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Traits.php";
include __DIR__ . "/Models/Food.php";
include __DIR__ . "/Models/Antiseptics.php";


/* Users */
$user_discount = false;
$user_discount = filter_var($_GET['login'], FILTER_VALIDATE_BOOLEAN) ;

$user = new User("Gino", "gino@email.com", $user_discount, $user_discount); // sconto applicato, carta attiva
//$user = new User("Paolo","gino@email.com", false, false); // sconto non applicato & carta non abilitata

/* Prodotto generico */
// $lettiera_cats_best = new Product("Lettiera Cat's Best Original 7L", "Cat", "Cat's Best", "Cat's Best Original è una lettiera agglomerante 100% naturale per gatti, a base di fibre di legno attive trattate tecnologicamente per l'assorbimento di liquidi e odori.", 8.90, $user_gino->has_discount);

/* Prodotti Sottoclassi */

$felix_ghiottonerie = new Food("Felix Le Ghiottonerie Multipack", "Cat", "Felix", "Felix Le Ghiottonerie è un alimento completo, ideale per soddisfare le esigenze nutrizionali ", 6.90, $user_discount, "80gr", "Manzo");
$combo_gatto = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90, $user_discount, true, true, "2 volte al mese");
//$combo_gatto_gino = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90,$user_gino->has_discount, true, true, "2 volte al mese");

$products = [$felix_ghiottonerie->getFullInfoProduct(), $combo_gatto->getFullInfoProduct()];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool Planet</title>
    <!-- Bootrap v5.1 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <!-- Bootstrap Js Bundle -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</head>

<body>

    <div class="containers p-5">
        <div class="m-auto w-25">
            <form action="index.php" method="get">
                <div class="mb-3">
                  <label for="email" class="form-label"></label>
                  <input type="email"
                    class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label"></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <label for="login" class="form-label"></label>
                  <input type="submit" name="login" value="true"
                     id="" aria-describedby="helpId" placeholder="Login">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                
            <div class="col">

            <div class="product-card">
                <div class="product-img">
                    <img src='https://picsum.photos/400/300' alt='default img'>
                    
                </div>
                <div class="details">
                    <h5>
                        <?= $product['name']?>
                    </h5>
                    <p>
                     Category:<?= ' '. $product['animal']?>
                    </p>
                    <p>
                     Brand:<?= ' '. $product['brand']?>
                    </p>
                    <p>
                     <?= $product['description']?>
                    </p>
                    <p>
                     <?= $product['price']?>
                    </p>
                    <p>
                     <?= $product['meat']?>
                    </p>



                </div>
            </div>

            

            </div>
            <?php } ?>
        </div>
    </div>


</body>

</html>