<?php

/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati. */

class Prodotti
{
    public $cibo;
    public $giochi;
    public $cucce;
    public $prezzo;
    public $titolo;
    public $immagine;

    public function __construct($cibo, $giochi, $cucce, $prezzo, $titolo, $immagine) {

        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cucce = $cucce;
        $this->prezzo = $prezzo;
        $this->titolo = $titolo;
        $this->immagine = $immagine;
    }
}

$e_commerce = new prodotti('cibo per cani', 'pallina', 'cucce per cani', '30 euro', 'e-commerce', '');

$prodottiArray = array($e_commerce);

class Cani extends prodotti {

}

class Gatti extends prodotti {
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($prodottiArray as $prodotto) :?>
    <div>
        <?php echo $prodotto->cibo?>

    </div>
    <?php endforeach; ?>
</body>
</html>