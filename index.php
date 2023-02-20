<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- Tra i prodotti, troviamo cibo, giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, 
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc). -->

<?php 
    require_once __DIR__ . '/models/product.php';
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

        <?php for($i = 0; $i < 8; $i++) : ?>
            <div class="col mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMQOO5zqXXp4li2ktQigiM2jqLjmxbiXRoQw&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Price</h5>
                                <p>Category</p>
                            </div>
                            <div class="text-center pe-3">
                                <span class="fs-1"><i class="fa-solid fa-dog"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</div>
</body>

</html>