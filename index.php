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
    public $categoriaAnimale;
    

    public function __construct($categoriaAnimale) {

        $this->categoriaAnimale = $categoriaAnimale;
       
    }
}

class Prodotto {

    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;
    

    public function __construct($nome, $prezzo, $immagine, Categoria $categoria) {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine =$immagine;
        $this->categoria = $categoria;
        // Corrisponde al controllo fatto in questo blocco:
/*  if (is_null($prodotto->categoria)) {
    $result = null;
    } else {
    $result = $prodotto->categoria->categoriaAnimale;
    } */
    }
    
}

 

$pallina_gatto = new Prodotto('pallina', '5 euro', '', new Categoria('gatto'));
$pallina_cane = new Prodotto('pallina', '5 euro', '', new Categoria('cane'));

$prodottiArray = array($pallina_gatto, $pallina_cane);
var_dump($prodottiArray)




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php foreach ($prodottiArray as $prodotto) :?>
    <div class="card">
        <?php echo $prodotto->categoria?>
    </div>
    <?php endforeach; ?>
</body>
</html>