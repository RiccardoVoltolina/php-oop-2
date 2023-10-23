<?php

//creo un trait per passare piu proprietà a più classi

trait Prezzoable {

    public $prezzo;


    //creo una funzione che prende il nome

    public function getPrice(): string {

        //seleziono la variabile che voglio cambiare (nome in questo caso), dal padre (prodotto in questo caso)

        return $this->prezzo;
    }

    //creo una funzione che setta il nome

    public function setPrice($nuovo_prezzo) {
        $this->prezzo = $nuovo_prezzo;
    }
}

?>