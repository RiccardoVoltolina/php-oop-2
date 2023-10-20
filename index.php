<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. */

class Categoria
{
    public $nomeDellaCategoria;


    public function __construct($nomeDellaCategoria)
    {

        $this->nomeDellaCategoria = $nomeDellaCategoria;
    }
}

class Prodotto
{

    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;


    public function __construct($nome, $prezzo, $immagine, Categoria $categoria)
    {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}



$pallina_gatto = new Prodotto('pallina', '5 euro', 'https://m.media-amazon.com/images/I/61ShS1de9nL._AC_UF894,1000_QL80_.jpg', new Categoria('Pallina per gatti'));
$pallina_cane = new Prodotto('pallina', '5 euro', 'https://m.media-amazon.com/images/I/618n68cp2ZL._AC_UF894,1000_QL80_.jpg', new Categoria('Pallina per cani'));



$prodottiArray = array($pallina_gatto, $pallina_cane);
//var_dump($prodottiArray)




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
                    <div><?php echo $prodotto->nome ?></div>
                    <div><?php echo $prodotto->prezzo ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>