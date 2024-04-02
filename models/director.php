<?php

class Director {

    public $nome;
    public $cognome;
    public $nazionalita;
    
        
    /**
     * __construct
     *
     * @param  mixed $_nome
     * @param  mixed $_cognome
     * @param  mixed $_nazionalita
     * @return void
     */
    function __construct($_nome, $_cognome, $_nazionalita){

        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->nazionalita = $_nazionalita;

    }

    public function getDirectorMovie(){
        return $this->nome . ' ' . $this->cognome . ', ' . $this->nazionalita;
    }

}

?>