<?php

class Movie {
    // Variabili d'istanza (attributi)
    public $title;
    public $author;
    public $year;

    // Costruttore
    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    // Metodo per ottenere informazioni sul film
    public function getMovieInfo() {
        return "Titolo: {$this->title}<br>" .
           "Autore: {$this->author}<br>" .
           "Anno: {$this->year}";
    }
}

?>
