<?php

/*
Classe Main: Product(name, animal, brand, descr, price, has_discount, discount)
Product Sub-Class: Food(weight,meat). Antiseptics(aviability,is_natural,dosage)
*/
include __DIR__ . "/Models/User.php";
include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Traits.php";
include __DIR__ . "/Models/Antiseptics.php";
include __DIR__ . "/Models/Food.php";

/* Users */
$user_discount = false;
$user_discount = filter_var($_GET['login'], FILTER_VALIDATE_BOOLEAN);

$user = new User("Gino", "gino@email.com", $user_discount, $user_discount); // sconto applicato, carta attiva
//$user = new User("Paolo","gino@email.com", false, false); // sconto non applicato & carta non abilitata

/* Prodotto generico */
// $lettiera_cats_best = new Product("Lettiera Cat's Best Original 7L", "Cat", "Cat's Best", "Cat's Best Original è una lettiera agglomerante 100% naturale per gatti, a base di fibre di legno attive trattate tecnologicamente per l'assorbimento di liquidi e odori.", 8.90, $user_gino->has_discount);

/* Prodotti Sottoclassi */

$felix_ghiottonerie = new Food("Felix Le Ghiottonerie Multipack", "Cat", "Felix", "Felix Le Ghiottonerie è un alimento completo, ideale per soddisfare le esigenze nutrizionali ", 33, $user_discount, "80gr", "Manzo", "cucciolo");
$combo_gatto = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90, $user_discount, true, true, "2 volte al mese", "adulto");
//$combo_gatto_gino = new Antiseptics("Frontline Combo Spot", "Cat", "FRONTLINE", "Frontline Combo Spot On 6 pipette, antiparassitario per gatti in pipette che protegge il tuo micio da pulci, zecche e zanzare.", 33.90,$user_gino->has_discount, true, true, "2 volte al mese");

$products = [$felix_ghiottonerie->getFullInfoProduct(), $combo_gatto->getFullInfoProduct()];

require __DIR__ . '/Layout/head.php';

/* Trustpilot FAKE stars db*/

$full_star = 5;
?>



<body>


  <header>
    <div class="spedition_banner text-center py-2">

      <h6 class="fw-bold">🚚 Consegna Rapida e Gratuita con ordini da soli 29€!</h6>

    </div>
    <div class="trustpilot_banner text-center py-1">

      <h6>
        <?php for ($i = 0; $i < $full_star; $i++) { ?><i class="bi bi-star-fill"></i><?php } ?>
        <strong>Eccezionale 420</strong> recensioni su <strong><a href="#">Trustpilot</a></strong>
      </h6>

    </div>


    <div class="nav-site">
      <div class="container m-auto">
        <div class="row py-3">
          <div class="col-4">
            <div class="logo d-flex align-items-center">
              <div class="logo_img">
                <img src='./assets/img/logo-dog-paw.png' alt='logo dog paw'>
              </div>
              <h1 class="fs-4 mb-0">Bool Planet</h1>
            </div>
          </div>
          <div class="col-8 d-flex align-items-center ">
            <ul class="nav justify-content-end flex-nowrap">
              <li class="nav-item">
                <a class="nav-link active" href="#"><i class="bi bi-house-door me-1"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-dog me-1"></i>Cane</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-cat me-1"></i>Gatto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-fish me-1"></i>Pesce e Rettile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-dove me-1"></i>Uccelli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-circle-plus me-1"></i>Novità</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fa-solid fa-percent me-1"></i>Offerte</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <!-- /.nav-site -->
    </div>

    <div class="general_info">
      <div class="container">
        <div class="row px-4 py-1 text-center">
          <div class="col-3"> Alta competenza di settore</div>
          <div class="col-3"> MIglior Qualità/Prezzo</div>
          <div class="col-3"> Consegna in 24/48h</div>
          <div class="col-3"> Spedizione gratuita da 49 €</div>
        </div>
      </div>
    </div>
  </header>

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
                <?= $product['name'] ?>
              </h5>
              <p>
                Category:<?= ' ' . $product['animal'] ?>
              </p>
              <p>
                Brand:<?= ' ' . $product['brand'] ?>
              </p>
              <p>
                <?= $product['description'] ?>
              </p>
              <p>
                <?= $product['price'] ?>
              </p>
              <p>
                <?= $product['meat'] ?>
              </p>



            </div>
          </div>



        </div>
      <?php } ?>
    </div>
  </div>


</body>

</html>