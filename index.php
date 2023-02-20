<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- Tra i prodotti, troviamo cibo, giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc). -->

<?php 
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Animal.php';
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Toy.php';
    require_once __DIR__ . '/Models/Health_and_hygiene.php';

    $dog = new Animal('cane', 'https://cdn-icons-png.flaticon.com/512/620/620851.png');
    $cat = new Animal('gatto', 'https://cdn-icons-png.flaticon.com/512/220/220124.png');
    $bird = new Animal('uccelli', 'https://cdn-icons-png.flaticon.com/512/2622/2622068.png');
    $fish = new Animal('pesci', 'https://cdn-icons-png.flaticon.com/128/9217/9217800.png');


    $toy_bone = new Product('osso', 'Lorem ipsum', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMQOO5zqXXp4li2ktQigiM2jqLjmxbiXRoQw&usqp=CAU', $dog, 7, 'Giocattoli');

    $products = [$toy_bone]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicola Placentino">
    <title>Pet shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container py-4">
    <div class="row row-cols-4">

        <?php foreach($products as $product) : ?>
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $product->img ?>" class="card-img-top" alt="...">
                    <div class="card-body pb-0">
                        <h4 class="card-title"><?= $product->title ?></h4>
                        <p class="card-text"><?= $product->description ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>€<?= $product->price ?></h5>
                                <p><?= $product->category ?></p>
                            </div>
                            <div class="text-center w-50 p-4">
                                <img src="<?= $product->animal->icon ?>" alt="<?= $product->animal->name ?>" class="img-fluid p-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
</body>

</html>