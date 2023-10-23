<?php

require_once __DIR__ . '/Namable.php';
class Prodotto
{
    //richiamo il mio trait,creato nel componente Namable

    use Namable;

    public $prezzo;
    public $categoria;
    public $immagine;


    public function __construct($nome, $prezzo, $immagine, Categoria $categoria)
    {

        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }

}


?>