<?php

//importo i file dove ho creato i miei trait

require_once __DIR__ . '/Prezzoable.php';

require_once __DIR__ . '/Namable.php';
class Prodotto
{
    //richiamo il mio trait,creato nel componente Namable

    use Namable;
    use Prezzoable;

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