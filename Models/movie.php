<?php
require_once 'production.php';
require_once 'genre.php';

class Movie extends Production {
    public $genre;
    public $running_time;

    public $poster;
    
    

    public function __construct($title, $author, $year, Genre $genre, $running_time, Poster $poster) {
        parent::__construct($title, $author, $year);
        $this->genre = $genre;
        $this->running_time = $running_time;
        $this->poster = $poster;
    }

    public function getInfo() {
        return parent::getInfo() . "<br>Genere: {$this->genre->getInfo()}<br>Durata: {$this->running_time} minuti";
    }
}
?>
