<?php

//creo un trait per passare piu proprietà a più classi

trait Namable {

    public $nome;


    //creo una funzione che prende il nome

    public function getName(): string {

        //seleziono la variabile che voglio cambiare (nome in questo caso), dal padre (prodotto in questo caso)

        return $this->nome;
    }

    //creo una funzione che setta il nome

    public function setName($nuovo_nome) {
        $this->nome = $nuovo_nome;
    }
}

?>