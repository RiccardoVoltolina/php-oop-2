<?php

require_once __DIR__ . '/Namable.php';
class Prodotto
{
    //richiamo il mio trait,creato nel componente Namable

    use Namable;

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

    //setto le funzioni che quando saranno invocate nell'index,mi consentiranno di settare il nome
    
    function getName(): string
    {
        return $this->nome;
    }

    function setName($nuovo_nome)
    {
        $this-> nome = $nuovo_nome;
    }
}


?>