<?php


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


?>