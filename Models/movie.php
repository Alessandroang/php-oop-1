<?php
require_once 'Production.php';

class Movie extends Production {
    public $genre;
    public $running_time;
    

    public function __construct($title, $author, $year, $genre, $running_time) {
        parent::__construct($title, $author, $year);
        $this->genre = $genre;
        $this->running_time = $running_time;
    }

    public function getInfo() {
        return parent::getInfo() . "<br>Genere: {$this->genre}<br>Durata: {$this->running_time} minuti";
    }
}
?>
