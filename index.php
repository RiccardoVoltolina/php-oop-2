<?php
/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. */

require __DIR__ . '/classi/categoria.php';
require __DIR__ . '/classi/prodotto.php';
require __DIR__ . '/dati.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .card {
            width: fit-content;
            height: 100%;
        }

        img {
            height: 300px;
            width: 200px;
        }
    </style>
</head>

<body class="bg-secondary">
    <h1 class="text-center">E-Commerce</h1>
    <div class="container mt-5">
        <div class="row justify-content-center">

            <?php foreach ($prodottiArray as $prodotto) :  ?>
                <div class="card text-center p-3 bg-black text-white me-3">
                    <h1><?php echo $prodotto->categoria->nomeDellaCategoria ?></h1>
                    <div class="pb-2">
                        <img src="<?= $prodotto->immagine ?>">
                    </div>
                    <div>Descrizione: <?php echo $prodotto->nome ?></div>
                    <div>Prezzo: <?php echo $prodotto->prezzo ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>